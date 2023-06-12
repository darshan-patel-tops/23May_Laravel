<?php

// include('header.php');
// include('header1.php');
// include('header.php');
// include('header.php');


// include_once('header.php');
// include_once('header.php');
// include_once('header.php');
// include_once('header.php');


// require('header.php');
// require('header1.php');
// require('header.php');
// require('header.php');


// print_r($_SESSION);
require_once('header.php');
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
// require_once('header.php');
// require_once('header.php');
// require_once('header1.php');

echo "Welcome  ". $_SESSION['userdata'][0];
?>

