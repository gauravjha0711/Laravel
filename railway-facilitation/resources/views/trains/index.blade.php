@extends('layouts.app')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Available Trains</h2>
    <form action="{{ route('trains.search') }}" method="GET">
        <input type="text" name="search" placeholder="Search train, station..." class="border p-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
    </form>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($trains as $train)
        <div class="p-4 border rounded-lg shadow-md">
            <h3 class="text-xl font-bold">{{ $train->name }} ({{ $train->number }})</h3>
            <p>{{ $train->start_station }} ➔ {{ $train->end_station }}</p>
            <p>Departure: {{ $train->departure_time }}</p>
            <p>Arrival: {{ $train->arrival_time }}</p>
            <p>Available Seats: {{ $train->available_seats }}</p>
            <a href="{{ route('booking.create', $train->id) }}" class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">Book Now</a>
        </div>
        @endforeach
    </div>
</div>
@endsection