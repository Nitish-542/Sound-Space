<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Instrument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreAccessoryRequest;
use App\Http\Requests\UpdateAccessoryRequest;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessories = Accessory::all();
        return view('accessories.index', compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instruments = Instrument::all();
        return view('accessories.create', compact('instruments'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Accessory $accessory)
    {
        $accessory->load('instruments');
        return view('accessories.show', compact('accessory'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessory $accessory)
    {
        $instruments = Instrument::all();
        return view('accessories.edit', compact('accessory', 'instruments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'instruments' => 'array|nullable',
            'instruments.*' => 'exists:instruments,id',
        ]);

        $accessory = Accessory::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
        ]);

        if ($request->has('instruments')) {
            $accessory->instruments()->attach($request->instruments);
        }

        return redirect()->route('accessories.index')->with('success', 'Accessory created successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccessoryRequest $request, Accessory $accessory)
    {
        $accessory->update($request->validated());

        $accessory->instruments()->sync($request->instrument_ids);

        Session::flash('success', 'Accessory updated successfully!');
        return redirect()->route('accessories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accessory $accessory)
    {
        //
    }

    public function trash($id)
    {
        $accessory = Accessory::findOrFail($id);
        $accessory->delete();
        return redirect()->route('accessories.index')->with('success', 'Accessory moved to trash.');
    }

    public function trashed()
    {
        $accessories = Accessory::onlyTrashed()->get();
        return view('accessories.trashed', compact('accessories'));
    }

    public function restore($id)
    {
        $accessory = Accessory::withTrashed()->findOrFail($id);
        $accessory->restore();
        return redirect()->route('accessories.index')->with('success', 'Accessory restored.');
    }
}
