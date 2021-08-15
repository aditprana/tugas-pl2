<?php 
    // koneksi database
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();

    $id     = $_POST['id'];
    $npm    = $_POST['npm'];
    $nama   = $_POST['nama'];
    
    mysqli_query($con,"update mahasiswa set npm='$npm', nama='$nama' where id='$id'");
    header("location:latihan1.php");
 
?>