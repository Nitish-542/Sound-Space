@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="display-4">Trashed Instruments</h1>
    <p>Below is a list of instruments that have been moved to the trash. You can restore them if needed.</p>

    <div class="row mt-4">
        @foreach($instruments as $instrument)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $instrument->name }}</h5>
                        <p class="card-text">Type: {{ $instrument->type }}</p>
                        <p class="card-text">Price: ${{ $instrument->price }}</p>
                        <form action="{{ route('instruments.restore', $instrument->id) }}" method="POST" style="display: inline;">
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