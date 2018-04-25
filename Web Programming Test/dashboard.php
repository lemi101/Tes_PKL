<table style="border:1px solid #333;">
	<thead>
		<th style="border-bottom:1px solid #333">Judul</th>
		<th style="border-bottom:1px solid #333">Pengarang</th>
		<th style="border-bottom:1px solid #333">Genre</th>
		<th>&nbsp;</th>
	</thead>
	<tbody>
    <?php
    include 'koneksi.php';
    $query = "SELECT buku.Judul AS Judul, buku.Pengarang AS Pengarang, ".
             "genre.Genre AS Genre, buku.ID AS ID FROM buku INNER JOIN genre ".
             "ON buku.ID_Genre = genre.ID";
    
    $exec = $mysqli->query($query) or die ('Query gagal');
    
    if ($exec->num_rows > 0) {
        while($row = $exec->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["Judul"]."</td>";
            echo "<td>".$row["Pengarang"]."</td>";
            echo "<td>".$row["Genre"]."</td>";
            echo '<td><a href="delete.php?id='.$row["ID"].'">Delete</a></td>';
            echo '<td><a href="update.php?id='.$row["ID"].'">Update</a></td>';
            echo "</tr>";
        }
    }
	?>
	</tbody>
</table>
<div>
    <br><br>
    <a href="create.html">Tambah data</a>
</div>