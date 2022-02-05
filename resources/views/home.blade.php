@extends('layout.header')
 
    <div class="container">
    <center>
    <h1>Inventory Barang Masuk</h1>
    </center><br>    

    <a href="tambah">
        <button type="button" class="btn btn-info">Tambah</button>
    </a>   

<br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($inventorys as $inventory)   
          <tr>
            <th scope="row">{{ $inventory['id'] }}</th>
            <td>{{ $inventory['nama'] }}</td>
            <td>{{ $inventory['harga'] }}</td>
            <td>{{ $inventory['stok'] }}</td>
            <td>
               <a href="tambah/{{ $inventory['id'] }}/edit">
                <button type="button" class="btn btn-success">EDIT</button>
               </a>

               <a href="data/{{ $inventory['id'] }}">
                <button type="button" class="btn btn-info">VIEW</button>
               </a>

                <form action="{{ url('tambah/'.$inventory['id']) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin hapus data ini?')">DELETE</button>
                </form>

            </td>
          </tr>
        @endforeach  
        </tbody>
      </table> 
      <p>Informasi Akses API :<br>
          Update stok -> {{ url('api/purchase/{id}') }}


      </p>
    </div>

    @extends('layout.footer')

</body>
</html>