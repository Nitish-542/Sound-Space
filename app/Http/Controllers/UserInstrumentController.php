<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;

class UserInstrumentController extends Controller
{
    /**
     * Display a listing of the instruments for users.
     */
    public function index()
    {
        $instruments = Instrument::with('accessories')->get();
        return view('user.instruments.index', compact('instruments'));
    }
}