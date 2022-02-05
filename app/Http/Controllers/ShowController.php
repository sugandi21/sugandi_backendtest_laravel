<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ShowController extends Controller
{
    public function index()
    {
        $inventory = inventory::all();
        return view('home',['inventorys'=>$inventory]);
    }

    public function show($id)
    {
      $inventory = inventory::find($id);
      return view('tambah.view', compact('inventory'));
    }


}
