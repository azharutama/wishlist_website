<?php
require('functions.php');
$wish = query("SELECT * FROM  wish");
require('views/admin.view.php');
