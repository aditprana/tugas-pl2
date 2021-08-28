<h1>Input Matakuliah</h1>
<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	if (isset($_POST['proses'])) {
		$query = mysqli_query($con, "INSERT INTO matakuliah (kode,nama) VALUES(
			'".$_POST['kode']."',
			'".$_POST['nama']."'
		)");
		header("location:index.php?id=".base64_encode(3));
	}

?>

<form action="" method="POST">
	<input type="text" name="kode">
	<input type="text" name="nama">
	<input type="submit" name="proses" value="Simpan"> <a href="index.php?id=<?php echo base64_encode(3) ?>">Kembali</a>
</form>