<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use Illuminate\Http\Request;

class UserAccessoryController extends Controller
{
    /**
     * Display a listing of the accessories for users.
     */
    public function index()
    {
        $accessories = Accessory::all(); // Fetch all accessories
        return view('user.accessories.index', compact('accessories'));
    }
}