<?php


function koneksi()
{
  return  mysqli_connect('localhost', 'root', '', 'pabw_a22100047');
}

function query($query)
{
  $db = koneksi();

  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $db = koneksi();

  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
            mahasiswa
            Values
            (null,'$nim','$nama','$email','$jurusan','$gambar');
            ";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}
