<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inventory;

class InventoryController extends Controller
{
    public function index(){
        $data=inventory::all();
        return response()->json($data);;
    }

    public function store(Request $request){
        $validasiinput = $request->validate([
          'nama' => 'required|max:255',
          'harga' => 'required',
          'stok' => 'required',
        ]);
   
   try{
      $response = inventory::create($validasiinput);
      return response()->json([
      'success' =>true,
      'messenge' =>'success',
      'data' =>$response
      ]);
   }catch(\Exception $e){
    return response()->json([
      'messenge' =>'Err',
      'errors' =>$e->getMessage()
      ]);
   }
  }

  public function update(Request $request, $id){
    $data=inventory::find($id);
    $validasiinput = $request->validate([
        'stok' => 'required|numeric|min:1',
      ]);

  try{
    $response = inventory::find($id);
    $stok = $data->stok+(int)$validasiinput['stok'];
    $response ->update(['stok' => $stok]);
    return response()->json([
      'success' =>true,
      'messenge' =>'success',
      'stok_sebelumnya' => $data->stok,
      'stok_sekarang' => $stok
    ]);
  }catch(\Exception $e){
    return response()->json([    
       'messenge' =>'Err',
       'errors' =>$e->getMessage()
    ]);
   }
 } 

}


