<?php
require 'functions.php';

// cek apakah tombol tambah sudah di tekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST)) {
    echo "<script>
          alert('data berhasil ditambahkan!');
          document.location.href = 'latihan3.php';
          </script>";
  } else {
    echo "<script>
          alert('data gagal ditambahkan!');
          document.location.href = 'latihan3.php';
          </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" autofocus required>
      </li>
      <li><label for="nrp">NRP :</label>
        <input type="text" name="nrp" id="nrp" required>
      </li>
      <li><label for="email">Email :</label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>