<?php
include("koneksi.php");
if(!isset($_GET['id_barang'])){
    header("Location:Join.php");
}
$id=$_GET['id_barang'];
$sql = "SELECT * FROM tb_barang WHERE id_barang=$id";
$query = mysqli_query($koneksi, $sql);
$tb_barang = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>
<html>
    <head>
    </head>
    <body>
        <h1>From Edit Data</h1>
        <form action="proses_edit.php" method="POST">

        <form>
            <fieldset>
                <input type="hidden" name="id_barang" value="<?php echo $tb_barang ['id_barang']?>"/>
                <p>
                   <label for="nama_barang">Nama Barang : </label>
                   <input type="text" name="nama_barang">
                </p>
                <p>
                   <label for="kategori_barang">Kategori Barang : </label>
                   <input type="text" name="kategori_barang">
                </p>
                <p>
                   <label for="nama_karyawan">Nama Karyawan : </label>
                   <input type="text" name="nama_karyawan" >
                </p>
                <p>
                   <label for="divisi">Divisi : </label>
                   <input type="text" name="divisi">
                </p>
                <p>
                   <label for="jabatan">Jabatan : </label>
                   <input type="text" name="jabatan">
                </p>
                <p>
                   <input type="submit" value="Simpan" name="Simpan" />
               </P>


           </fieldset>
       </form>
   </body>
</html> 