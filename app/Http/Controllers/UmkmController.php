<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Kabkota;
use App\Models\Kategori_umkm;
use App\Models\Pembina;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::all();
        return view('umkm.index', compact('umkms'));
    }

    public function create()
    {
        $kabkotas = Kabkota::all();
        $kategori_umkms = Kategori_umkm::all();
        $pembinas = Pembina::all();
        return view('umkm.create', compact('kabkotas', 'kategori_umkms', 'pembinas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'modal' => 'required|numeric',
            'pemilik' => 'required',
            'alamat' => 'required',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'kabkota_id' => 'required|integer',
            'rating' => 'nullable|integer|min:1|max:5',
            'kategori_umkm_id' => 'required|integer',
            'pembina_id' => 'nullable|integer',
        ]);

        Umkm::create($request->all());

        return redirect()->route('umkm.index')->with('success', 'UMKM berhasil ditambahkan.');
    }

    public function show(Umkm $umkm)
    {
        return view('umkm.show', compact('umkm'));
    }

    public function edit(Umkm $umkm)
    {
        $kabkotas = Kabkota::all();
        $kategori_umkms = Kategori_umkm::all();
        $pembinas = Pembina::all();
        return view('umkm.edit', compact('umkm', 'kabkotas', 'kategori_umkms', 'pembinas'));
    }

    public function update(Request $request, Umkm $umkm)
    {
        $request->validate([
            'nama' => 'required',
            'modal' => 'required|numeric',
            'pemilik' => 'required',
            'alamat' => 'required',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'kabkota_id' => 'required|integer',
            'rating' => 'nullable|integer|min:1|max:5',
            'kategori_umkm_id' => 'required|integer',
            'pembina_id' => 'nullable|integer',
        ]);

        $umkm->update($request->all());

        return redirect()->route('umkm.index')->with('success', 'UMKM berhasil diperbarui.');
    }

    public function destroy(Umkm $umkm)
    {
        $umkm->delete();

        return redirect()->route('umkm.index')->with('success', 'UMKM berhasil dihapus.');
    }
}



