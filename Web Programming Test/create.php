<?php 
include 'koneksi.php';

$query = "SELECT ID, Genre FROM genre";
$query2 = "SELECT COUNT(ID) FROM buku";

$exec = $mysqli->query($query) or die ('Query gagal');
$exec2 = $mysqli->query($query2) or die ('Query gagal');

$row2 = $exec2->fetch_assoc();

$id_buku = "B".sprintf("%04d", ($row2["COUNT(ID)"] + 1));
?>

<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Create</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <form action="creator.php" method="POST">

    <input type="text" name="id_b" value="<?php echo($id_buku); ?>" hidden>

    <b>Judul Buku</b>
    <br>
    <input type="text" name="judul" required>
    <br><br>

    <b>Pengarang</b>
    <br>
    <input type="text" name="pengarang" required>
    <br><br>
    
    <b>Genre</b>
    <br>
    <select name="id_g" required>
      <?php 
        if ($exec->num_rows > 0) {
          while($row = $exec->fetch_assoc()) {
              echo("<option value=".$row["ID"].">".$row['Genre']."</option>");
          }
      }
    ?>
    </select>
    <br><br>

    <button type="submit">Tambahkan</button>
  </form>
</body>
</html>