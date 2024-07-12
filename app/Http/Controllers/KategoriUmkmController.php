<?php

namespace App\Http\Controllers;

use App\Models\Kategori_umkm;
use Illuminate\Http\Request;

class KategoriUmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            // Mengambil semua data kategori_umkm
            $list_kategori_umkm = Kategori_umkm::all();
            return view('kategori_umkm.index', compact('list_kategori_umkm'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kategori_umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Kategori_umkm::create($request->all());

        return redirect()->route('kategori_umkm.index')->with('success', 'Kategori UMKM created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori_umkm $kategori_umkm)
    {
        //
        return view('kategori_umkm.show', compact('kategori_umkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori_umkm $kategori_umkm)
    {
        //
        return view('kategori_umkm.edit', compact('kategori_umkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori_umkm $kategori_umkm)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $kategori_umkm->update($request->all());

        return redirect()->route('kategori_umkm.index')->with('success', 'Kategori UMKM updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori_umkm $kategori_umkm)
    {
        $kategori_umkm->delete();

        return redirect()->route('kategori_umkm.index')->with('success', 'Kategori UMKM deleted successfully.');
    }
}
