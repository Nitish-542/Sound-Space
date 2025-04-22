@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="display-4">Trashed Accessories</h1>
    <p>Below is a list of accessories that have been moved to the trash. You can restore them if needed.</p>

    <div class="row mt-4">
        @foreach($accessories as $accessory)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $accessory->name }}</h5>
                        <p class="card-text">Type: {{ $accessory->type }}</p>
                        <p class="card-text">Price: ${{ $accessory->price }}</p>
                        <form action="{{ route('accessories.restore', $accessory->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Restore</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection