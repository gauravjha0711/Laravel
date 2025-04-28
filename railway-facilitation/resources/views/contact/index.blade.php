@extends('layouts.app')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Contact Support</h2>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
            <input type="text" name="subject" id="subject" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea name="message" id="message" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Send Message</button>
        </div>
    </form>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mt-4">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
