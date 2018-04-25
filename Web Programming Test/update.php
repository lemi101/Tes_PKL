<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM buku WHERE ID = '$id'";
$exec = $mysqli->query($query) or die ('Query gagal');

$row = $exec->fetch_assoc();
?>

<body>
  <form action="updater.php" method="POST">
    <b>Judul Buku</b>
    <input type="text" name="judul" value="<?php $row["Judul"]?>" disabled>

    <b>Pengarang</b>
    <input type="text" name="pengarang" value="<?php $row["Pengarang"]?>" required>
    
    <b>ID Genre</b>
    <input type="text" name="id_g" value="<?php $row["ID_Genre"]?>" required>

    <button type="submit">Update!</button>
  </form>
</body>