<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>

<form action="" method="post">
  <div class="container" style="width:auto; margin:auto;">
    <div class="display-2 d-flex justify-content-center fw-bolder" style="margin-bottom:50px; margin-top:100px;">Your Wish!!!</div>
    <div class="mb-3">
      <label class="form-label">Wish</label>
      <input type="text" class="form-control" name="wish" placeholder="enter your wish">
    </div>
    <div class="mb-3">
      <label class="form-label">Place</label>
      <input type="text" class="form-control" name="place" placeholder="enter the place">
    </div>
    <div class="mb-3">
      <label class="form-label">Reason</label>
      <textarea class="form-control" rows="3" placeholder="enter your reason" name="reason"></textarea>
    </div>
    <button type="submit" class="btn btn-dark" name="submit">GOOOO!!</button>
  </div>
  </div>
</form>
<?php require 'partials/footer.php'; ?>