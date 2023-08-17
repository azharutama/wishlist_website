<?php require 'partials/header.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light  d-flex " style="font-family: cursive; ">
  <div class="container-fluid pt-3 ps-5" style="margin-right:50px; margin-left:50p;">
    <a class="navbar-brand" href="index.php">HER AND I</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="azhar.php">Azhar</a></li>
            <li><a class="dropdown-item" href="aliya.php">Aliya</a></li>
            <hr>
            <li><a class="dropdown-item" href="admin.php">admin</a></li>
          </ul>

        <li class="nav-item">
          <a class="nav-link" href="wish.php">Wishlist</a>
        </li>

      </ul>


    </div>
  </div>
</nav>
<div class="display-2 d-flex justify-content-center fw-bolder" style="margin-bottom:50px; margin-top:100px;">Login</div>
<form action="" method="post">
  <div class="container border border-white" style="width:400px; margin:auto; ">

    <form action="login.php" method="post" class="border border-dark">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username">

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-danger" name="login" id="login">Login</button>
    </form>
  </div>
  </div>
</form>

<?php require 'partials/footer.php'; ?>