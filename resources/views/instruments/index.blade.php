@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">View All Instruments</h1>
        <div class="col">
            <a href="{{ route('instruments.create') }}" class="btn btn-primary">Add New Instrument</a>
        </div>
    </div>
</div>
<div class="row">
    @foreach($instruments as $instrument)
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $instrument->name }}</h5>
                <p class="card-text">Type: {{ $instrument->type }}</p>
                <p class="card-text">Price: ${{ $instrument->price }}</p>
                <a href="{{ route('instruments.edit', $instrument->id) }}" class="card-link">Edit</a>
                <a href="{{ route('instruments.trash', $instrument->id) }}" class="card-link">Delete</a>
                <a href="{{ route('instruments.show', $instrument->id) }}" class="card-link">Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection