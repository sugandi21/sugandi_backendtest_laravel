<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventory;

class InventoryController extends Controller
{
    public function index(){
        return view('tambah.index');
    }

    public function create()
    {
        $model = new Inventory;
        return view('tambah.index', compact('model'));
    }    

    public function store(Request $request)
    {
        $validasiinput = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required',
            'stok' => 'required',
          ]);
          
          Inventory::create($validasiinput);
          return redirect('/')->with('success', 'Barang telah ditambah !');
        
    }


    public function update(Request $request, $id)
    {
        $model = Inventory::find($id);
        $validasiinput = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required',
            'stok' => 'required',
          ]);
        $model->nama = $validasiinput['nama'];
        $model->harga = $validasiinput['harga'];
        $model->stok = $validasiinput['stok'];

        $model->save();

        return redirect('/')->with('success', "Barang berhasil diperbaharui");
    }    

    public function show(){
        return view('tambah.edit');
    }
    

    public function edit($id)
    {
        $model = Inventory::find($id);
        if (!$model) abort(404);
        return view('tambah.edit', compact('model'));
    }


    public function destroy($id)
    {
        $model = Inventory::find($id);
        $model->delete();
        return redirect('/')->with('success','Barang Berhasil di hapus!');
    }    
}
