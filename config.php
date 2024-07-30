<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "u927419660_blog", "0qEkxGoS7@", "u927419660_blog");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://blogingmineads.com/');
?>