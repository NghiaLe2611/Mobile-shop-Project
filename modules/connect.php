<?php
	
	$host = '127.0.0.1';
	$username = 'root';
	$password = '';
	$db = 'mobile-shop';

	$mysqli = new mysqli($host,$username,$password,$db);
	
	if($mysqli->connect_error){
		die("Connect failed" . $mysqli->connect_error);
	}

	$mysqli->set_charset("utf8");
?>