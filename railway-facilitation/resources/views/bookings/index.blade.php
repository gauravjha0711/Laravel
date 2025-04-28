@extends('layouts.app')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">My Bookings</h2>
    
    @if($bookings->isEmpty())
        <p>No bookings found.</p>
    @else
        <div class="space-y-4">
            @foreach($bookings as $booking)
                <div class="border p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">{{ $booking->train->name }} ({{ $booking->train->number }})</h3>
                    <p><strong>Seat Number:</strong> {{ $booking->seat_number }}</p>
                    <p><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>
                    <p><strong>Booking Date:</strong> {{ $booking->booking_date->format('d M Y, h:i A') }}</p>

                    @if($booking->status == 'booked')
                        <form action="{{ route('booking.cancel', $booking->id) }}" method="POST" class="mt-4">
                            @csrf
                            @method('POST')
                            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">Cancel Booking</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
