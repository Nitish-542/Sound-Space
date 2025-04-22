@extends('layouts.user')

@section('content')
<div>
    <h1 class="display-2">Available Accessories</h1>
</div>
<div class="container accessories">
    <div class="row">
        @foreach($accessories as $accessory)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $accessory->name }}</h5>
                        <p class="card-text">Type: {{ $accessory->type }}</p>
                        <p class="card-text">Price: ${{ $accessory->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection