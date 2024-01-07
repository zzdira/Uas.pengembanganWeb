<?php
include_once 'Connection.php';
if(isset($_POST["submit"])){
  
  if(tambah($_POST) > 0){
    echo"
    <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'admin.php';
    </script>
    ";
  }else {
    echo"
    <script>
      alert('data gagal ditambahkan');
      document.location.href = 'admin.php';
    </script>
    ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tambah data</title>
    <style>
        body{
            margin:0;
            padding:10px;
        }
        .row{
            padding:20px;
        }
    </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <h1>Tambah Data Peminjam Buku</h1>
  <div class="col-md-6">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="contoh@gmail.com" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="jenis_kelamin" class="form-label">jenis kelamin</label>
    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required autocomplete="off">
      <option>Laki-laki</option>
      <option>Perempuan</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="telepon" class="form-label">No telepon</label>
    <input type="text" name="telepon" class="form-control" id="telepon" placeholder="08123456789" required autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="judul_buku" class="form-label">Judul buku</label>
    <input type="text" name="judul_buku" class="form-control" id="judul_buku" placeholder="contoh : 2015" required>
  </div>
  <div class="col-md-6">
    <label for="lama_pinjam" class="form-label">lama_pinjam</label>
    <select id="lama_pinjam" name="lama_pinjam" class="form-select" required autocomplete="off">
      <option>---</option>
      <option>3 Hari</option>
      <option>5 Hari</option>
      <option>7 Hari</option>
      <option>14 Hari</option>
    </select>
  </div>
  <div class="col-6">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="file" name="gambar" class="form-control" id="gambar">
  </div>
  <div class="col-12 mt-4" >
    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
  </div>
</form>
</body>
</html>