<?php
require 'function.php';

//ambil id dari url
$id = $_GET['id'];

//quert mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <center>
    <h2>Detail Mahasiswa</h2>
    <ul>
      <li><img src="img/<?= $m['gambar']; ?>"></li>
      <li><?= $m['nim']; ?></li>
      <li><?= $m['nama']; ?></li>
      <li><?= $m['email']; ?></li>
      <li><?= $m['jurusan']; ?></li>
      <li><a href="">ubah</a> | <a href="">hapus</a></li>
      <li><a href="latihan3.php">kembali</a></li>
    </ul>
  </center>
</body>

</html>