<h1>Edit Dosen</h1>
<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	if (isset($_POST['proses'])) {
		$query = mysqli_query($con, "update dosen set kode = '".$_POST['kode']."', nama = '".$_POST['nama']."' where id = '".$_GET['iD']."'
		");
		header("location:index.php?id=".base64_encode(2));
	}

	$query = mysqli_query($con, "SELECT * FROM dosen WHERE id = '".$_GET['iD']."'");
	while ($data = mysqli_fetch_array($query)) {

?>

<form action="" method="POST">
	<input type="text" name="kode" value="<?php echo $data['kode'] ?>">
	<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
	<input type="submit" name="proses" value="Simpan"> <a href="index.php?id=<?php echo base64_encode(2) ?>">Kembali</a>
</form>

<?php } ?>