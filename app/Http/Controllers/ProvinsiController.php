<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            // Mengambil semua data pasien
            $list_provinsi = Provinsi::all();
            return view('provinsi.index', compact('list_provinsi'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'ibukota' => 'required|string|max:100',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
        ]);

        Provinsi::create($request->all());

        return redirect()->route('provinsi.index')->with('success', 'Provinsi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Provinsi $provinsi)
    {
        //
        return view('provinsi.show', compact('provinsi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provinsi $provinsi)
    {
        $provinsi = Provinsi::findOrFail($provinsi->id);
        return view('provinsi.edit', compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provinsi $provinsi)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'ibukota' => 'required|string|max:100',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
        ]);

        $provinsi = Provinsi::findOrFail($provinsi->id);
        $provinsi->update($request->all());

        return redirect()->route('provinsi.index')->with('success', 'Provinsi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provinsi $provinsi)
    {
        $provinsi = Provinsi::findOrFail($provinsi->id);
        $provinsi->delete();

        return redirect()->route('provinsi.index')->with('success', 'Provinsi deleted successfully.');
    }
}
