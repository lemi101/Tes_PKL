<?php
    include 'koneksi.php';

    $jdl = $_POST['judul'];
    $pgr = $_POST['pengarang'];
    $id_b = $_POST['id_b'];
    $id_g = $_POST['id_g'];

    $query = "Update buku SET Judul = '$jdl', Pengarang = '$pgr'".
    ", ID_Genre = '$id_g' WHERE ID = '$id_b'";

    $exec = $mysqli->query($query) or die ('Query gagal');

    header('location:dashboard.php');
?>