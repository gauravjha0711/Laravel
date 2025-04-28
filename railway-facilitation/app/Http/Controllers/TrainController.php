<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    // Show all available trains
    public function index()
    {
        $trains = Train::all();
        return view('trains.index', compact('trains'));
    }

    // Search trains by name or station
    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $trains = Train::where('name', 'LIKE', "%$search%")
                    ->orWhere('start_station', 'LIKE', "%$search%")
                    ->orWhere('end_station', 'LIKE', "%$search%")
                    ->get();

        return view('trains.index', compact('trains'));
    }
}
