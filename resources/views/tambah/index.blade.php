@extends('layout.header')
<div class="container">

    <center>
        <h1>FORM TAMBAH BARANG</h1>
    </center><br>

    <a href="/">
        <button type="button" class="btn btn-info">Kembali</button>
    </a><br><br>      
<div class="card">
   <div class="card-body">

<form method="POST" action=""> 
    @csrf   
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga">
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok">
    </div>          
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

 </div>
</div>

</div>
  @extends('layout.footer')