@extends('/layout.header')
<div class="container">

    <center>
        <h1>EDIT BARANG</h1>
    </center><br>

    <a href="/">
        <button type="button" class="btn btn-info">Kembali</button>
    </a><br><br>  

<div class="card">
   <div class="card-body">

<form method="POST" action="{{ url('tambah/'.$model->id) }}" enctype="multipart/form-data"> 
    @csrf   
    <input type="hidden" name="_method" value="PUT"> 
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="{{ $model->nama }}">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="{{ $model->harga }}">
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" value="{{ $model->stok }}">
    </div>          
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

 </div>
</div>

</div>
  @extends('layout.footer')