<?php
require 'functions.php';
$wish = query("SELECT * FROM  wish");
require 'views/index.view.php';
