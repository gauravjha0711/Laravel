<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\Schedule;
use App\Models\Station;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('status', 'active')->get();
        return view('trains.index', compact('trains'));
    }

    public function show($id)
    {
        $train = Train::with('schedules')->findOrFail($id);
        return view('trains.show', compact('train'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'source' => 'required|exists:stations,id',
            'destination' => 'required|exists:stations,id|different:source',
            'date' => 'required|date|after_or_equal:today',
        ]);

        $schedules = Schedule::with(['train', 'sourceStation', 'destinationStation'])
            ->where('source_station_id', $request->source)
            ->where('destination_station_id', $request->destination)
            ->whereDate('departure_time', $request->date)
            ->where('available_seats', '>', 0)
            ->get();

        $stations = Station::all();
        return view('trains.search_results', compact('schedules', 'stations'));
    }
}