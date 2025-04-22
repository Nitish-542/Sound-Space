@extends('layouts.user')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Available Instruments</h1>
    </div>
</div>
<div class="row instruments">
    @foreach($instruments as $instrument)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $instrument->name }}</h5>
                    <p class="card-text"><strong>Type:</strong> {{ $instrument->type }}</p>
                    <p class="card-text"><strong>Price:</strong> ${{ $instrument->price }}</p>
                    <h6><strong>Accessories:</h6>
                    <ul>
                        @foreach($instrument->accessories as $accessory)
                            <li>{{ $accessory->name }} ({{ $accessory->type }}) - ${{ $accessory->price }}</li>
                        @endforeach </strong>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection