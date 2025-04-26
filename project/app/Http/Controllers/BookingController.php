<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create($schedule_id)
    {
        $schedule = Schedule::with(['train', 'sourceStation', 'destinationStation'])
            ->findOrFail($schedule_id);
            
        return view('bookings.create', compact('schedule'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'schedule_id' => 'required|exists:schedules,id',
            'seat_count' => 'required|integer|min:1|max:10',
        ]);

        $schedule = Schedule::findOrFail($request->schedule_id);

        if ($schedule->available_seats < $request->seat_count) {
            return back()->with('error', 'Not enough seats available.');
        }

        $booking = Booking::create([
            'user_id' => Auth::id(),
            'schedule_id' => $schedule->id,
            'seat_count' => $request->seat_count,
            'total_amount' => $schedule->price * $request->seat_count,
            'status' => 'confirmed',
        ]);

        $schedule->decrement('available_seats', $request->seat_count);

        return redirect()->route('bookings.show', $booking->id)
            ->with('success', 'Booking confirmed!');
    }

    public function show($id)
    {
        $booking = Booking::with(['schedule.train', 'schedule.sourceStation', 'schedule.destinationStation'])
            ->where('user_id', Auth::id())
            ->findOrFail($id);
            
        return view('bookings.show', compact('booking'));
    }

    public function history()
    {
        $bookings = Booking::with(['schedule.train', 'schedule.sourceStation', 'schedule.destinationStation'])
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('bookings.history', compact('bookings'));
    }

    public function cancel($id)
    {
        $booking = Booking::where('user_id', Auth::id())
            ->where('status', 'confirmed')
            ->findOrFail($id);

        $booking->schedule->increment('available_seats', $booking->seat_count);
        $booking->update(['status' => 'cancelled']);

        return back()->with('success', 'Booking cancelled successfully.');
    }
}