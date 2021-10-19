<?php 
	session_start();
		$conn = mysqli_connect("localhost", "root", "", "accept");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
	mysqli_set_charset($conn,"utf8");
		define ('ROOT_PATH', realpath('/home/yuomkwllu49l/public_html/'));
	define('BASE_URL', 'https://www.accept-m.com/');
?>