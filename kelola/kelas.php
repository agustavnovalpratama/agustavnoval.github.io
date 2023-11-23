<?php
include '../config/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
</head>
<body>
    <head>
        <h2> Daftar Kelas</h2>
    </head>

    <!-- <nav>
        <a href="form_tambah_kelas.php">[+] Tambah Kelas Baru</a>
    </nav> -->
    <br>
    <table border="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Kompetensi</th>
                <th>Tahun Pelajaran</th>
                <th>keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM kelas";
            $query = mysqli_query($conn, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama_kelas']."</td>";
                echo "<td>".$siswa['kompetensi']."</td>";
                echo "<td>".$siswa['tahun_pelajaran']."</td>";
                echo "<td>".$siswa['keterangan']."</td>";


                echo "<td>";
                echo "</tr>";
            }   
            ?>
        </tbody>
    </table>
    <p>Total Kelas: <?php echo mysqli_num_rows($query) ?></p>
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