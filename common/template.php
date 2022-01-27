<?php 

// if (isset($_GET['loc'])) {
// $loc = filter_input(INPUT_GET,"loc");;
// } else {
// $loc = ('home');
// };

switch ($loc) {
case 'home':
include("content/index_content.php");
break;
case 'about':
include("content/about_content.php");
break;
case 'products':
include("content/product_content.php");
break;
case 'realisations':
include("content/realisation_content.php");
break;
default:
include("content/404.php");
break;
};