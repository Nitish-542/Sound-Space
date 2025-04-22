@extends('layouts.admin')

@section('content')
<div class="row mb-4">
    <div class="col">
        <h1 class="display-2">Add a New Accessory</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <form action="{{ route('accessories.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="instruments" class="form-label">Assign to Instruments</label>
                <select class="form-control" id="instruments" name="instruments[]" multiple required>
                    @foreach($instruments as $instrument)
                        <option value="{{ $instrument->id }}">{{ $instrument->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
