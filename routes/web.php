<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\UserInstrumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAccessoryController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
});


// Profile routes with authentication middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Instrument routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('instruments/trash/{id}', [InstrumentController::class, 'trash'])->name('instruments.trash');
    Route::get('instruments/trashed', [InstrumentController::class, 'trashed'])->name('instruments.trashed');
    Route::post('/instruments/restore/{id}', [InstrumentController::class, 'restore'])->name('instruments.restore');
    // Resource route for instruments
    Route::resource('instruments', InstrumentController::class);

    Route::get('accessories/trash/{id}', [AccessoryController::class, 'trash'])->name('accessories.trash');
    Route::get('accessories/trashed', [AccessoryController::class, 'trashed'])->name('accessories.trashed');
    Route::post('accessories/restore/{id}', [AccessoryController::class, 'restore'])->name('accessories.restore');

    // Resource route for accessories
    Route::resource('accessories', AccessoryController::class);
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// User-side routes for instruments and accessories
Route::get('/user/instruments', [UserInstrumentController::class, 'index'])->name('user.instruments.index');
Route::get('/user/accessories', [UserAccessoryController::class, 'index'])->name('user.accessories.index');


use App\Http\Controllers\AdminController;

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');
require __DIR__.'/auth.php';