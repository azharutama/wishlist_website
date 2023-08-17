<?php
session_start();

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}
require 'core/functions.php';

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn,  "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($password == $row["password"]) {

      $_SESSION["login"] = true;
      echo "
      <script>
        alert('login berhasil!');
        document.location.href = 'index.php';
      </script>";
    }
  }
  $eror = true;
}

require 'views/login.view.php';
