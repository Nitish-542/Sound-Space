@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Add a New Instrument</h1>
    </div>
</div>
<div class="row">
    <form action="{{ route('instruments.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>

        <h3 class="mt-4">Accessories</h3>
        <div id="accessories">
            <div class="accessory mb-3">
                <label for="accessory_name" class="form-label">Accessory Name</label>
                <input type="text" class="form-control" name="accessories[0][name]" required>
                <label for="accessory_type" class="form-label">Accessory Type</label>
                <input type="text" class="form-control" name="accessories[0][type]" required>
                <label for="accessory_price" class="form-label">Accessory Price</label>
                <input type="number" class="form-control" name="accessories[0][price]" step="0.01" required>
            </div>
        </div>
        <button type="button" class="btn btn-primary" onclick="addAccessory()">Add Another Accessory</button>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    let accessoryIndex = 1;
    function addAccessory() {
        const accessoriesDiv = document.getElementById('accessories');
        const newAccessoryDiv = document.createElement('div');
        newAccessoryDiv.classList.add('accessory', 'mb-3');
        newAccessoryDiv.innerHTML = `
            <label for="accessory_name" class="form-label">Accessory Name</label>
            <input type="text" class="form-control" name="accessories[${accessoryIndex}][name]" required>
            <label for="accessory_type" class="form-label">Accessory Type</label>
            <input type="text" class="form-control" name="accessories[${accessoryIndex}][type]" required>
            <label for="accessory_price" class="form-label">Accessory Price</label>
            <input type="number" class="form-control" name="accessories[${accessoryIndex}][price]" step="0.01" required>
        `;
        accessoriesDiv.appendChild(newAccessoryDiv);
        accessoryIndex++;
    }
</script>
@endsection