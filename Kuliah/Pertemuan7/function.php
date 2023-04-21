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
