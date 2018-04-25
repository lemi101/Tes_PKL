<?php
	$host = '127.0.0.1';
	$db   = 'db_buku';
	$username = 'root';
	$password = '';

	$mysqli = new mysqli($host, $username, 
		$password, $db) or die ("Gagal melakukan koneksi");
?>