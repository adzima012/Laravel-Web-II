<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;

class BarangController extends Controller
{
    public function index() {
        $barangs = Barang::all();
        return view('barang', compact('barangs'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $barang = new Barang();
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

        $barang->save();
        return redirect('barang')->with('success', 'Data barang berhasil ditambahkan');
    }

    
    public function edit($id) {
        $barang = Barang::find($id);
        return view('edit', compact('barang'));
        
    }
    
    public function update(Request $request, string $id) {
        $barang = Barang::find($id);
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

        $barang->save();
        return redirect('barang')->with('success', 'Data barang berhasil diupdate');
    }


    public function destroy($id) {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('barang')->with('success', 'Data barang berhasil dihapus');        
    }
}