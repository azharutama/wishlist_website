<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
require('core/functions.php');
$wish = query("SELECT * FROM  wish");
require('views/admin.view.php');
