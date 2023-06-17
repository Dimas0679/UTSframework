<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Barang::all();
        return view('product.daftarbarang', compact('product'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.tambahbarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
        // $barang = Barang::create($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'harga' => 'required|numeric',
            'deskripsi'=>'required',
            'satuan'=>'required'
        ]);
        $barang = new Barang;
        $barang->nama_barang = $request->name;
        $barang->harga_barang = $request->harga;
        $barang->deskripsi_barang = $request->deskripsi;
        $barang->kode_satuan = $request->satuan;
        $barang->save();
        return redirect()->route('barang.index')->with('success', 'barang berhasil ditambahkan');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('product.editbarang', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        // $barang->update($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'harga' => 'required|numeric',
            'deskripsi'=>'required',
            'satuan'=>'required'
        ]);
        $barang->nama_barang = $request->name;
        $barang->harga_barang = $request->harga;
        $barang->deskripsi_barang = $request->deskripsi;
        $barang->kode_satuan = $request->satuan;
        $barang->save();
        return redirect()->route('barang.index')->with('success', 'barang berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'barang berhasil didelete');

    }
}
