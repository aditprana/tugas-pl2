<?php

	include 'koneksi.php';
	$db = new Database();
	$con = $db->Connect();

	$query = mysqli_query($con, "delete from mahasiswa where id = '".$_GET['id']."'");
	header("location:index.php?id=".base64_encode(1));

?>