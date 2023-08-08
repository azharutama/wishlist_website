<?php

require 'functions.php';
$id = $_GET["id"];

$wish = query("SELECT * FROM wish WHERE id = $id")[0];

if (isset($_POST["submit"])) {

  if (ubah($_POST) > 0) {
    echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'admin.php';
			</script>
		";
  }
}


require 'views/ubah.view.php';
