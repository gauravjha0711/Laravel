<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\Schedule;
use App\Models\Station;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $trains = Train::count();
        $bookings = Booking::count();
        $revenue = Booking::sum('total_amount');
        
        return view('admin.dashboard', compact('trains', 'bookings', 'revenue'));
    }

    public function trains()
    {
        $trains = Train::all();
        return view('admin.trains.index', compact('trains'));
    }

    public function createTrain()
    {
        return view('admin.trains.create');
    }

    public function storeTrain(Request $request)
    {
        $request->validate([
            'train_number' => 'required|unique:trains',
            'name' => 'required',
            'total_seats' => 'required|integer|min:1',
        ]);

        Train::create($request->all());

        return redirect()->route('admin.trains')->with('success', 'Train added successfully.');
    }

    public function editTrain($id)
    {
        $train = Train::findOrFail($id);
        return view('admin.trains.edit', compact('train'));
    }

    public function updateTrain(Request $request, $id)
    {
        $request->validate([
            'train_number' => 'required|unique:trains,train_number,'.$id,
            'name' => 'required',
            'total_seats' => 'required|integer|min:1',
        ]);

        $train = Train::findOrFail($id);
        $train->update($request->all());

        return redirect()->route('admin.trains')->with('success', 'Train updated successfully.');
    }

    public function bookings()
    {
        $bookings = Booking::with(['user', 'schedule.train'])->get();
        return view('admin.bookings.index', compact('bookings'));
    }
}