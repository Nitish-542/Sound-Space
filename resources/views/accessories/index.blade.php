@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">View All Accessories</h1>
        <div class="col">
            <a href="{{ route('accessories.create') }}" class="btn btn-primary">Add New Accessoty</a>
        </div>
    </div>
</div>
<div class="row">
    @foreach($accessories as $accessory)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $accessory->name }}</h5>
                    <p class="card-text">Type: {{ $accessory->type }}</p>
                    <p class="card-text">Price: ${{ $accessory->price }}</p>
                    <a href="{{ route('accessories.edit', $accessory->id) }}" class="card-link">Edit</a>
                    <a href="{{ route('accessories.trash', $accessory->id) }}" class="card-link">Delete</a>
                    <a href="{{ route('accessories.show', $accessory->id) }}" class="card-link">Details</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection