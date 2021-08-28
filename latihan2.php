<h1>Input Mahasiswa</h1>
<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	if (isset($_POST['proses'])) {
		$query = mysqli_query($con, "INSERT INTO mahasiswa (npm,nama) VALUES(
			'".$_POST['npm']."',
			'".$_POST['nama']."'
		)");
		header("location:index.php?id=".base64_encode(1));
	}

?>

<form action="" method="POST">
	<input type="text" name="npm">
	<input type="text" name="nama">
	<input type="submit" name="proses" value="Simpan"> <a href="index.php?id=<?php echo base64_encode(1) ?>">Kembali</a>
</form>