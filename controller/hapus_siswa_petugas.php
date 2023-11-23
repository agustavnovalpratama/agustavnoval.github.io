<?php
include '../config/conn.php';

if(isset($_GET ['id'])){
    $id =$_GET['id'];

    $sql = "DELETE FROM siswa WHERE id=$id";
    $query = mysqli_query($conn,$sql);

    if($query){
        header('location../kelola/petugas.php');
    }else{
        die("Data Gagal Di Hapus");
    }

}else{
    die("Akses Hapus Dilarang");
}
?>