<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>

<div class="container" style="width:auto; margin:auto; margin-bottom:200px;">
  <div class="display-2 d-flex justify-content-center fw-bolder" style="margin-bottom:50px; margin-top:100px;">Our Wishlist</div>
  <div class="row">
    <?php foreach ($wish as $w) : ?>
      <div class="col-sm-6">
        <div class="card" style="margin-bottom:30px;">
          <div class="card-body">
            <h4 class="card-title "><span class="d-none"><?= $w["id"]; ?></span>wish : <?= $w["wish"]; ?></h4>
            <h5 class="card-title">place : <?= $w["place"]; ?></h5>
            <p class="card-text">reason : <?= $w["reason"]; ?></p>
            <a href="hapus.php?id=<?= $w["id"]; ?>" class="btn btn-danger">done</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <div class="container">
      <a class="btn btn-dark" href="jadwal.php">ADD SOME WISH +</a>
    </div>
  </div>
</div>




<?php require 'partials/footer.php'; ?>