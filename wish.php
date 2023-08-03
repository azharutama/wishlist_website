<?php
require 'functions.php';
$wish = query("SELECT * FROM wish");
require 'views/wish.view.php';
