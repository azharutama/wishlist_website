<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>

<div class="container">
  <h1 class="mt-5">Wishlist</h1>
  <table class="table table-hover">
    <tr>
      <th>no</th>
      <th>Wish</th>
      <th>Place</th>
      <th>Reason</th>
      <th>update or delete</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($wish as $w) : ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $w["wish"]; ?></td>
        <td><?= $w["place"]; ?></td>
        <td><?= $w["reason"]; ?></td>
        <td><a class="btn btn-primary" href="ubah.php?id=<?= $w["id"]; ?>" role="button">ubah</a> | <a class="btn btn-danger" href="hapus.php?id=<?= $w["id"]; ?>" role="button" onclick="return ('yakinn??') ">hapus</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <a class="btn btn-dark" href="jadwal.php" role="button">Tambah</a>
</div>
<?php require 'partials/footer.php'; ?>