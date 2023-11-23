<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>UPDATE KELAS</title>
</head>

<body>
    <?php
    include "../config/conn.php";
    $id_kelas = $_GET['Id'];

    $query = "SELECT * FROM pelanggan WHERE id = $id_pelanggan";

    $exe = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($exe);

    $id = $data['id'];
    $nama_kelas = $data['nama_kelas'];
    $kompetensi = $data['kompetensi'];
    $tahun_pelajaran = $data['tahun_pelajaran'];
    $keterangan = $data['keterangan'];
    ?>


    <center>
        <h1>UPDATE DATA PELANGGAN</h1>
    </center>
    <br />
    <a href="../pelanggan/index.php">KEMBALI</a>
    <br />
    <br />
    <form method="post" action="../controller/update_pelanggan.php">

        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" value="<?= $nama ?>" name="nama" id="">
                    <input type="hidden" value="<?= $id ?>" name="id" id="">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" value="<?= $alamat ?>" name="alamat" id=""></td>
            </tr>
            <tr>
                <td>No_hp</td>
                <td>:</td>
                <td><input type="number" value="<?= $no_hp ?>" name="no_hp" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>