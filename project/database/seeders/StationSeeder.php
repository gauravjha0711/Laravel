<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    public function run()
    {
        $stations = [
            ['name' => 'Mumbai Central', 'code' => 'MMCT', 'city' => 'Mumbai'],
            ['name' => 'Delhi Junction', 'code' => 'DLI', 'city' => 'Delhi'],
            ['name' => 'Chennai Central', 'code' => 'MAS', 'city' => 'Chennai'],
            ['name' => 'Howrah Junction', 'code' => 'HWH', 'city' => 'Kolkata'],
            ['name' => 'Bangalore City', 'code' => 'SBC', 'city' => 'Bangalore'],
        ];

        foreach ($stations as $station) {
            Station::create($station);
        }
    }
}