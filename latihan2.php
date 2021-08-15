<h1>Tambah Mahasiswa</h2>
<a href="latihan1.php"><span>< Kembali</span></a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    if(isset($_POST['proses']))
    {
        // echo var_dump($_POST['nama']);

        $query = mysqli_query($con,"insert into mahasiswa (npm, nama) values('".$_POST['npm']."','".$_POST['nama']."')");
        
        header('location:latihan1.php');
    }
?>
<form action="" method="POST">
    <input type="text" name="npm">
    <input type="text" name="nama">
    <input type="submit" name="proses" value="Simpan">
</form>