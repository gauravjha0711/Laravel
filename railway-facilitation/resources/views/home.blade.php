@extends('layouts.app')

@section('content')
<div class="text-center p-10 bg-blue-900 text-white">
    <h1 class="text-4xl font-bold mb-4">Integrated Railway Passenger Facilitation</h1>
    <p class="text-xl mb-6">Get real-time updates, book your tickets easily, and enjoy a seamless journey!</p>
    <div class="space-x-4">
        <a href="{{ route('trains.index') }}" class="bg-green-500 px-6 py-3 rounded-lg text-white hover:bg-green-600">Search Trains</a>
        <a href="{{ route('bookings.index') }}" class="bg-yellow-500 px-6 py-3 rounded-lg text-white hover:bg-yellow-600">My Bookings</a>
        <a href="{{ route('contact.index') }}" class="bg-red-500 px-6 py-3 rounded-lg text-white hover:bg-red-600">Contact Support</a>
    </div>
</div>
@endsection
