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
			  (null, '$wish', '$place', '$reason')
			";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  $query = "DELETE FROM wish WHERE id = $id";

  mysqli_query($conn, $query);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data["id"];
  $wish = $data["wish"];
  $place = $data["place"];
  $reason = $data["reason"];

  //upload gambar
  $query = "UPDATE wisH SET
			  wish= '$wish',
        place= '$place',
        reason= '$reason'
			WHERE id= '$id' ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
