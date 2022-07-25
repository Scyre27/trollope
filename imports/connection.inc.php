<?php

session_start();

$con = mysqli_connect("localhost:3306", "root", "Asare4ster...", "trolopee_prop");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}

define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/php/ecom/');
define('SITE_PATH', 'http://127.0.0.1/php/ecom/');
define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH . 'media/product/');
define('PRODUCT_IMAGE_SITE_PATH', SITE_PATH . 'media/product/');
