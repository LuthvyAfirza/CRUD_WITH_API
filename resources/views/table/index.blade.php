<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Table Data</title>
</head>
<body>
    <center><h1 class="mt-3 mb-5 ms-2" style="font-style: italic">Table Barang</h1></center>
    <a href="/table" class="btn btn-dark mb-2" style="margin-left: 127px;">Tambah Data Barang</a>
    <div class="container">
    <table class="table table-dark table-striped">
        <thead>
          <tr class="text-center">
            <th scope="col">ID Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Deskripsi Barang</th>
            <th scope="col">Harga</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($data_table as $table)
          <tr class="text-center">
            <th scope="row">{{$table->id}}</th>
            <td>{{$table->namaBarang}}</td>
            <td>{{$table->deskripsiBarang}}</td>
            <td>{{$table->harga}}</td>
            <td> <a href="/table/{{ $table->id }}/edit" class="btn btn-light" style="background-color: #B7C4CF;  #B7C4CF; border-radius: 30px; color: black;">Ubah</a></td>
            <td>
              <form action="/table/{{ $table->id }}" method="POST">
                  @csrf
                  @method('delete')
              <input class="btn btn-light" type="submit" value="Hapus"  style="background-color: #B7C4CF; border-radius: 30px; color: black;">
              </form>
              </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>