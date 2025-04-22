@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Accessory Details</h1>
        <p><strong>Name:</strong> {{ $accessory->name }}</p>
        <p><strong>Instruments:</strong></p>
        <ul>
            @forelse($accessory->instruments as $instrument)
            <li>{{ $instrument->name }}</li>
            @empty
            <li>No instruments assigned to this accessory.</li>
            @endforelse
        </ul>

        <p><strong>Type:</strong> {{ $accessory->type }}</p>
        <p><strong>Price:</strong> ${{ $accessory->price }}</p>
    </div>
</div>
@endsection