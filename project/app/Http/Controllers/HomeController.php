<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stations = Station::all();
        return view('home', compact('stations'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}