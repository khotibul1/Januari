<?php
include("koneksi.php");

$id = $_GET['id_barang'];

mysqli_query($koneksi,"DELETE FROM tb_karyawan where id_karyawan='$id'");
mysqli_query($koneksi,"DELETE FROM tb_barang where id_barang='$id'");

header("location:Join.php");
?>