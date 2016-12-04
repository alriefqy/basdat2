<?php
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'akademik';

	$db = new mysqli($server,$user,$pass,$database);
	if($db->connect_error)
	{
		die('koneksi gagal :'. $db->connect_error);
	}
?>