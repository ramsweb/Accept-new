<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "accept");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants

    

	define ('ROOT_PATH', realpath('/home/yuomkwllu49l/public_html/English/'));
	define('BASE_URL', 'https://www.accept-m.com/English/');

	
?>