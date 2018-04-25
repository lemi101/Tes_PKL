<?php 
include 'koneksi.php';

$uname = $_POST['uname'];
$pass = $_POST['passwd'];
$query = "SELECT * FROM user WHERE Uname ='$uname' AND Pass ='$pass'";

$exec = $mysqli->query($query) or die ('Query gagal');
$obj = $exec->fetch_object();

    if ($obj){
        header('location:dashboard.php');
    } else {
        echo('<alert>Login Gagal</alert>');
        header('location:login.html');
    }
?>