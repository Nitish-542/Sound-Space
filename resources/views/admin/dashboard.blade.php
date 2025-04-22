@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="display-4">Admin Dashboard</h1>
    <p>Welcome to the admin dashboard. Here you can manage instruments, accessories, and view important metrics.</p>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Instruments</h5>
                    <p class="card-text">Manage all musical instruments.</p>
                    <a href="{{ route('instruments.index') }}" class="btn btn-primary">Manage Instruments</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Accessories</h5>
                    <p class="card-text">Manage all accessories.</p>
                    <a href="{{ route('accessories.index') }}" class="btn btn-primary">Manage Accessories</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Instrument</h5>
                    <p class="card-text">Add a new Instrument.</p>
                    <a href="/instruments/create" class="btn btn-primary">Add Instrument</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Accessory</h5>
                    <p class="card-text">Add a new Accessory.</p>
                    <a href="/accessories/create" class="btn btn-primary">Add Accessory</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Deleted Instrument</h5>
                    <p class="card-text">Recently deleted Instrument.</p>
                    <a href="/instruments/trashed" class="btn btn-primary">Restore Instrument</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Deleted Accessory</h5>
                    <p class="card-text">Recently deleted Accessory.</p>
                    <a href="/accessories/trashed" class="btn btn-primary">Restore Accessory</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection