<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BookingController extends Controller
{
    // Show form to book ticket
    public function create(Train $train)
    {
        return view('booking.create', compact('train'));
    }

    // Store booking
    public function store(Request $request, Train $train)
    {
        // Check if seats are available
        if ($train->available_seats <= 0) {
            return redirect()->back()->with('error', 'No seats available.');
        }

        // Book ticket
        $booking = new Booking();
        $booking->user_id = Auth::id();
        $booking->train_id = $train->id;
        $booking->seat_number = rand(1, $train->total_seats); // Random seat number
        $booking->booking_date = Carbon::now();
        $booking->status = 'booked';
        $booking->save();

        // Decrease available seats
        $train->available_seats -= 1;
        $train->save();

        return redirect()->route('bookings.index')->with('success', 'Ticket booked successfully!');
    }

    // Show user's bookings
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->with('train')->get();
        return view('bookings.index', compact('bookings'));
    }

    // Cancel booking
    public function cancel(Booking $booking)
    {
        if ($booking->user_id != Auth::id()) {
            abort(403);
        }

        if ($booking->status == 'cancelled') {
            return redirect()->back()->with('error', 'Booking already cancelled.');
        }

        $booking->status = 'cancelled';
        $booking->save();

        // Increase available seats
        $train = Train::find($booking->train_id);
        $train->available_seats += 1;
        $train->save();

        return redirect()->back()->with('success', 'Booking cancelled successfully.');
    }
}
