<h1>Daftar Mahasiswa</h2>
<a href="latihan2.php"><span>Tambah Mahasiswa</span></a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();

    $query  = mysqli_query($con,"select * from mahasiswa");
    $res = $query->num_rows;

    if ($res > 0) {
        echo "<table border='1px solid black'>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>";
                $no = 0;
                while($data = mysqli_fetch_array($query)){
                    echo " <tr>
                                <td>".$data["npm"]."</td>
                                <td>".$data["nama"]."</td>
                                <td>
                                    <a href='latihan3.php?id=".$data["id"]."; ?>'>Edit</a>
                                    <a href='latihan4.php?id=".$data["id"]."; ?>'>Hapus</a>
                                </td>
                            </tr>";
                }
        echo "</table>";
    }else{
        echo "0 results";
    }
?>