<?php
require "core/functions.php";
$id = $_GET["id"];
if (hapus($id) > 0) {

  echo "
  <script>
    alert('wishlist berhasil dihapus!');
    document.location.href = 'index.php';
  </script>
";
} else {
  echo "
  <script>
    alert('wishlist berhasil dihapus!');
    document.location.href = 'index.php';
  </script>
";
}
