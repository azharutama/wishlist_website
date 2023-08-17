<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>

<!--jumbotron-->
<div class="container " style="margin-bottom:200px;">

  <div class="container" style="margin-top:50px; margin-bottom:100px">
    <div class="row">

      <div class="col-md-6">
        <img src="img/love.jpg" class="img-fluid rounded-start" alt="">
      </div>
      <div class="col-md-6" style="margin-top:100px; font-family:cursive">
        <div class="fw-bold display-6"> A wishlist is a collection of hopes, dreams, and possibilities. It's a reminder that we have the power to shape our future.</div>
      </div>
    </div>
  </div>
  <!--end-->

  <hr>

  <div class="container" style="width:auto; margin:auto;">
    <div class="display-3 d-flex justify-content-center fw-bolder" style="margin-bottom:50px; margin-top:100px;">Wishlist!!</div>
    <div class="row">
      <?php foreach ($wish as $w) : ?>
        <div class="col-sm-6">
          <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="card">
              <div class="card-body">

                <h4 class="card-title "><span class="d-none"><?= $w["id"]; ?></span>wish : <?= $w["wish"]; ?></h4>
                <h5 class="card-title">place : <?= $w["place"]; ?></h5>
                <p class="card-text">reason : <?= $w["reason"]; ?></p>
                <a href="hapus.php?id=<?= $w["id"]; ?>" class="btn btn-danger">done</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</div>

<?php require 'partials/footer.php'; ?>