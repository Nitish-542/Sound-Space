<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use App\Models\Accessory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreInstrumentRequest;
use App\Http\Requests\UpdateInstrumentRequest;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instruments = Instrument::all();
        return view('instruments.index', compact('instruments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instruments.create', [
            'instruments' => Instrument::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Instrument $instrument)
    {
        $instrument->load('accessories');
        return view('instruments.show', compact('instrument'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instrument $instrument)
    {
        return view('instruments.edit', compact('instrument'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInstrumentRequest $request)
    {
        $instrument = Instrument::create($request->validated());

        foreach ($request->accessories as $accessoryData) {
            $accessory = Accessory::create($accessoryData);
            $instrument->accessories()->attach($accessory->id);
        }

        Session::flash('success', 'Instrument and accessories added successfully');
        return redirect()->route('instruments.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstrumentRequest $request, Instrument $instrument)
    {
        $instrument->update($request->validated());


        Session::flash('success', 'Instrument updated successfully');
        return redirect()->route('instruments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instrument $instrument)
    {
        //
    }

    public function trash($id)
    {
        $instrument = Instrument::findOrFail($id);
        $instrument->delete();
        return redirect()->route('instruments.index')->with('success', 'Instrument moved to trash.');
    }

    public function trashed()
    {
        $instruments = Instrument::onlyTrashed()->get();
        return view('instruments.trashed', compact('instruments'));
    }

    public function restore($id)
    {
        $instrument = Instrument::withTrashed()->findOrFail($id);
        $instrument->restore();
        return redirect()->route('instruments.index')->with('success', 'Instrument restored.');
    }
}
