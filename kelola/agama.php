<?php
include '../config/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Agama</title>
</head>
<body>
    <head>
        <h2> Daftar Agama</h2>
    </head>

    <!-- <nav>
        <a href="form_tambah_kelas.php">[+] Tambah Agama Baru</a>
    </nav> -->
    <br>
    <table border="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Agama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM agama";
            $query = mysqli_query($conn, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama_agama']."</td>";

                echo "<td>";
                echo "</tr>";
            }   
            ?>
        </tbody>
    </table>
    <p>Total Agama: <?php echo mysqli_num_rows($query) ?></p>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Data kelas Berhasil Ditambahkan";
            } else {
                echo "Tambah Data Siswa Gagal";
            }
        ?>
            <?php endif; ?>
</body>
</html>
</body>
</html>