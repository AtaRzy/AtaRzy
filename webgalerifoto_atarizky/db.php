<?php
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ukk_webgalery_atarizky';
	
	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');
?>