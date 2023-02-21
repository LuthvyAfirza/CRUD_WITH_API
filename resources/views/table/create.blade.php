<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
<body>
    <h2 class="ms-5 mt-5">Tambah Data Pelanggan</h2>            
            <form action="table/create" method="post" class="ms-5">
                @csrf
            <label>Nama Barang</label><br>
            <input type="text" placeholder="Masukkan nama barang" name="namaBarang"><br>

            <label>Deskripsi Barang</label><br>
            <input type="text" placeholder="Deskripsi" name="deskripsiBarang"><br>

            <label>Harga Barang</label><br>
            <input type="text" placeholder="Masukkan Harga" name="harga"><br>

            <button type="submit" class="btn btn-primary mt-2" value="Simpan">Simpan</button>
            </form>
</body>
</html>