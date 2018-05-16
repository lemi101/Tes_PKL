<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM buku WHERE ID = '$id'";
$query2 = "SELECT ID, Genre FROM genre";

$exec = $mysqli->query($query) or die ('Query gagal');
$exec2 = $mysqli->query($query2) or die ('Query gagal');

$row = $exec->fetch_assoc();
?>

<body>
  <form action="updater.php" method="POST">
    <b>Judul Buku</b>
    <br>
    <input type="text" name="judul" value="<?php echo($row["Judul"]);?>" required>
    <br><br>

    <b>Pengarang</b>
    <br>
    <input type="text" name="pengarang" value="<?php echo($row["Pengarang"]);?>" required>
    <br><br>
    
    <b>Genre</b>
    <br>
    <select name="id_g" required>
      <?php 
        if ($exec2->num_rows > 0) {
          while($row2 = $exec2->fetch_assoc()) {
              $opt= "";

              if ($row2["ID"] == $row["ID_Genre"]) {
                $opt= "<option value=".$row2["ID"]." selected>".$row2['Genre']."</option>";
              } else {
                $opt= "<option value=".$row2["ID"].">".$row2['Genre']."</option>";
              }
              
              echo($opt);
          }
      }
    ?>
    </select>
    <br><br>

    <input type="text" name="id_b" value="<?php echo($id);?>" hidden>

    <button type="submit">Update!</button>
  </form>
</body>
