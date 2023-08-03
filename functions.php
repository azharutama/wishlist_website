<?php
//koneksi
$conn = mysqli_connect('localhost', 'root', '', 'db_training');

//koneksi
function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'db_training') or die('KONEKSI GAGAL!');
  return $conn;
}

//querry
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query)
    or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();


  $wish = $data["wish"];
  $place = $data["place"];
  $reason = $data["reason"];

  //upload gambar
  $query = "INSERT INTO wish
				VALUES
			  r(null, '$wish', '$place', '$reason')
			";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
