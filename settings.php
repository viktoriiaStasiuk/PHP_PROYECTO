<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_DATABASE', 'travel');

	session_start();
	$conn = new mysqli();
	$conn->connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
	if ($conn->connect_error){
	   die('Error de conexión: ' . $conn->connect_error);
	}
	$conn->set_charset("utf8");
	$_SESSION['CONN'] = $conn;
?>