<?php
    // koneksi database
    include '../config/conn.php';

    // menangkap data yang di kirim dari form
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jm_saudara = $_POST['jm_saudara'];
    $id_kelas = $_POST['id_kelas'];
    $id_agama = $_POST['id_agama'];
    
    // menginput data ke database
    mysqli_query($conn, "insert into siswa values('','$nama','$tempat_lahir','$tgl_lahir','$alamat','$hobi','$cita_cita','$jm_saudara','$id_kelas','$id_agama')");

    // mengalihkan halaman kembali ke index.php
    header("location:petugas.php");

    ?>