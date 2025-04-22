@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Edit Accessory</h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('accessories.update', $accessory->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $accessory->name }}" required>
        </div>
        <div class="mb-3">
            <label for="instrument_ids" class="form-label">Instruments</label>
            <select multiple class="form-control" id="instrument_ids" name="instrument_ids[]">
                @foreach($instruments as $instrument)
                    <option value="{{ $instrument->id }}" {{ $accessory->instruments->contains($instrument->id) ? 'selected' : '' }}>
                        {{ $instrument->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $accessory->type }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $accessory->price }}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection