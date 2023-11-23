<?php
include 'config/conn.php';
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
        <h2> Daftar Siswa</h2>
    </head>

    <nav>
        <a href="form_tambah_siswa.php">[+] Tambah Siswa Baru</a>
    </nav>
    <br>
    <table border="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Kompetensi</th>
                <th>Tahun Pelajaran</th>
                <th>keterangan</th>
                <th>Action</th>
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
                echo "<a href='form_edit_siswa.php?id=".$siswa['id']."'>Edit</a> | ";
                echo "<a href='controller/hapus_siswa.php?id=".$siswa['id']."'>Hapus</a>";
                
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
                echo "Data Siswa Berhasil Ditambahkan";
            } else {
                echo "Tambah Data Siswa Gagal";
            }
        ?>
            <?php endif; ?>
</body>
</html>
</body>
</html>