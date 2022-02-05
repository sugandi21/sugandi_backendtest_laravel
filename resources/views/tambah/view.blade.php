@extends('layout.header')
<div class="container">

    <center>
        <h1>DETAIL BARANG</h1>
    </center><br>

    <a href="/">
        <button type="button" class="btn btn-info">Kembali</button>
    </a><br><br>  

<div class="card">
    <div class="card-body">
       Nama :  {{ $inventory->nama }} <br>
       Harga :  {{ $inventory->harga }} <br>
       Stok :  {{ $inventory->stok }} <br>
    </div>
</div>

</div> 
@extends('layout.footer')
