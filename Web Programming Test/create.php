<?php 
include 'koneksi.php';

$jdl = $_POST['judul'];
$pgr = $_POST['pengarang'];
$id_b = $_POST['id_b'];
$id_g = $_POST['id_g'];

$query = "INSERT INTO buku (ID, Judul, Pengarang, ID_Genre)
VALUES ('$id_b', '$jdl', '$pgr', '$id_g')";

$exec = $mysqli->query($query) or die ('Query gagal');

header('location:dashboard.php');