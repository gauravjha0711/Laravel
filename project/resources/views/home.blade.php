@extends('layout')

@section('title', 'Home')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Search Trains</div>
            <div class="card-body">
                <form action="{{ route('trains.search') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="source" class="form-label">From</label>
                            <select class="form-select" id="source" name="source" required>
                                <option value="">Select Station</option>
                                @foreach($stations as $station)
                                <option value="{{ $station->id }}">{{ $station->name }} ({{ $station->code }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="destination" class="form-label">To</label>
                            <select class="form-select" id="destination" name="destination" required>
                                <option value="">Select Station</option>
                                @foreach($stations as $station)
                                <option value="{{ $station->id }}">{{ $station->name }} ({{ $station->code }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" min="{{ date('Y-m-d') }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Search Trains</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection