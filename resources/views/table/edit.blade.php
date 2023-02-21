<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Barang</title>
</head>
<body>
    <H2>Edit Data Barang</H2>
    <form action="/table/{{ $data_table->id }}/proses" method="POST">
        @csrf
        <label>Nama</label><br>
        <input type="text" name="namaBarang" value="{{ $data_table->namaBarang }}" required><br>

        <label>Deskripsi</label><br>
        <input type="text" name="deskripsiBarang" value="{{ $data_table->deskripsiBarang }}" required><br>

        <label>Harga</label><br>
        <input type="text" name="harga" value="{{ $data_table->harga }}" required><br>

        <button type="submit" class="btn btn-primary mt-2" value="Simpan">Simpan</button>
   
    </form>
</body>
</html>