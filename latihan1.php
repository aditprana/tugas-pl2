<h1>Daftar Mahasiswa</h1>

<table border="1">
	<tr>
		<td><b><center>NO</center></b></td>
		<td><b><center>NPM</center></b></td>
		<td><b><center>NAMA</center></b></td>
		<td><b><center>AKSI</center></b></td>
	</tr>

<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	echo "<a href='latihan2.php'>Tambah</a> <br>";
	$query = mysqli_query($con, "select * from mahasiswa");
	$no = 1;
	while ($data = mysqli_fetch_array($query)) {
		echo '<tr>';
		echo '<td>'.$no.'</td>';
		echo '<td>'.$data['npm'].'</td>';
		echo '<td>'.$data['nama'].'</td>';
		echo '<td>'."<a href='latihan3.php?id=".$data['id']."'>Edit</a> | <a href='latihan4.php?id=".$data['id']."'>Hapus</a></td>";
		echo '</tr>';
		$no++;
	}

?>

</table>