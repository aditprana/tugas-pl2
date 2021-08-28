<h1>Daftar Dosen</h1>

<table border="1">
	<tr>
		<td><b><center>NO</center></b></td>
		<td><b><center>KODE DOSEN</center></b></td>
		<td><b><center>NAMA DOSEN</center></b></td>
		<td><b><center>AKSI</center></b></td>
	</tr>

<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	echo "<a href='latihan6.php'>Tambah</a> <br>";
	$query = mysqli_query($con, "select * from dosen");
	$no = 1;
	while ($data = mysqli_fetch_array($query)) {
		echo '<tr>';
		echo '<td>'.$no.'</td>';
		echo '<td>'.$data['kode'].'</td>';
		echo '<td>'.$data['nama'].'</td>';
		echo '<td>'."<a href='latihan7.php?iD=".$data['id']."'>Edit</a> | <a href='latihan8.php?iD=".$data['id']."'>Hapus</a></td>";
		echo '</tr>';
		$no++;
	}

?>

</table>