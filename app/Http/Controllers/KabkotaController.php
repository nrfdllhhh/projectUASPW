<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use Illuminate\Http\Request;

class KabkotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            // Mengambil semua data kabkota
            $list_kabkota = Kabkota::all();
            return view('kabkota.index', compact('list_kabkota'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kabkota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'provinsi_id' => 'required|integer',
        ]);

        Kabkota::create($request->all());

        return redirect()->route('kabkota.index')->with('success', 'Kabupaten/Kota berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kabkota $kabkota)
    {
        //
        return view('kabkota.show', compact('kabkota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kabkota $kabkota)
    {
        //
        return view('kabkota.edit', compact('kabkota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kabkota $kabkota)
    {
        //
        {
            $request->validate([
                'nama' => 'required',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'provinsi_id' => 'required|integer',
            ]);
    
            $kabkota->update($request->all());
    
            return redirect()->route('kabkota.index')->with('success', 'Kabupaten/Kota berhasil diperbarui.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kabkota $kabkota)
    {
        $kabkota->delete();

        return redirect()->route('kabkota.index')->with('success', 'Kabupaten/Kota berhasil dihapus.');
    }
}
