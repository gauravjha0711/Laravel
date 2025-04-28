@extends('layouts.app')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Book Ticket for {{ $train->name }} ({{ $train->number }})</h2>
    <form action="{{ route('booking.store', $train->id) }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="seat_number" class="block text-sm font-medium text-gray-700">Select Seat</label>
            <input type="number" name="seat_number" id="seat_number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">Book Now</button>
        </div>
    </form>

    @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg mt-4">
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection
