<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM buku WHERE ID = '$id'";
$exec = $mysqli->query($query) or die ('Query gagal');
header('location:dashboard.php');
?>