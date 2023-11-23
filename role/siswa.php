<?php
include '../config/conn.php';
session_start();

if($_SESSION['role']==""){
    header("location: index.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <head>
        <h1>ROLE SISWA</h1>
    </head>
    <br>
    <table border="10">
    <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Hobi</th>
                <th>Cita Cita</th>
                <th>Jumlah Saudara</th>
                <th>Id kelas</th>
                <th>Id Agama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM siswa";
            $query = mysqli_query($conn, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['tempat_lahir']."</td>";
                echo "<td>".$siswa['tanggal_lahir']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['hobi']."</td>";
                echo "<td>".$siswa['cita_cita']."</td>";
                echo "<td>".$siswa['jm_saudara']."</td>";
                echo "<td>".$siswa['id_kelas']."</td>";
                echo "<td>".$siswa['id_agama']."</td>";
            
                echo "</tr>";
            }   
            ?>
        </tbody>
    </table>
    <p>Total Siswa: <?php echo mysqli_num_rows($query) ?></p>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Data Siswa Berhasil Ditambahkan";
            } else {
                echo "Tambah Data Siswa Gagal";
            }
        ?>
            <?php endif; ?>
            <form action="../controller/logout.php" method="POST" class="login-username">
                <div class="input-grub">
                    <button type="submid" class="btn">Logout</button>
                </div>
            </form>
</body>
</html>