<h1>Edit Mahasiswa</h2>
<a href="latihan1.php"><span>< Kembali</span></a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    $id     = $_GET['id'];
    $data   = mysqli_query($con,"select * from mahasiswa where id='$id'");
    while($d = mysqli_fetch_array($data)){
?>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $d['id']; ?>">
        <input type="text" name="npm" value="<?= $d['npm']; ?>">
        <input type="text" name="nama" value="<?= $d['nama']; ?>">
        <input type="submit" name="proses" value="Simpan">
    </form>
<?php }?>