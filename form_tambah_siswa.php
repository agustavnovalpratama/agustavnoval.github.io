<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>

<body>
    <h2>TAMBAH DATA SISWA</h2>
    <br />
    <form method="POST" action="../controller/tambah_siswa.php">
        <table>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tempat Lahir :</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Hobi :</td>
                <td><input type="text" name="hobi"></td>
            </tr>
            <tr>
                <td>Cita Cita :</td>
                <td><input type="text" name="cita_cita"></td>
            </tr>
            <tr>
                <td>Jumlah Saudara :</td>
                <td><input type="text" name="jm_saudara"></td>
            </tr>
            <tr>
                <td>Id Kelas :</td>
                <td><input type="text" name="id_kelas"></td>
            </tr>
            <tr>
                <td>Id Agama :</td>
                <td><input type="text" name="id_agama"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>