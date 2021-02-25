<?php
	// $base_url = "http://localhost/KITTRAVELLING/";
	date_default_timezone_set('Asia/Jakarta');
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "db_smp24";

$con = mysqli_connect($server, $user, $password, $database) or die(mysqli_connect_error());
