@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Instrument Details</h1>
        <p><strong>Name:</strong> {{ $instrument->name }}</p>
        <p><strong>Type:</strong> {{ $instrument->type }}</p>
        <p><strong>Price:</strong> ${{ $instrument->price }}</p>
        <p><strong>Accessories:</strong></p>
        <ul>
            @forelse($instrument->accessories as $accessory)
            <li>{{ $accessory->name }} - ${{ $accessory->price }}</li>
            @empty
            <li>No accessories assigned to this instrument.</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection