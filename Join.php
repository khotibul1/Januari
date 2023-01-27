<html>
<head>
    <title>Data</title>
</head>
<body>

<h4> <a href=tambah.php>Tambah Siswa</a></h4>
    <table border="1">
    <tr>
        <td>No.</td>
        <td>Nama Barang</td>
        <td>Kategori Barang</td>
        <td>Nama Karyawan</td>
        <td>Divisi</td>
        <td>Jabatan</td>
        <td>Aksi</td>
    </tr>

<?php
include ("koneksi.php");

$query = mysqli_query($koneksi, "SELECT * FROM tb_barang INNER JOIN tb_karyawan ON tb_barang.id_barang = tb_karyawan.id_karyawan");

$no = 1;
foreach ($query as $row) :
?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama_barang']; ?></td>
        <td><?= $row['kategori_barang']; ?></td>
        <td><?= $row['nama_karyawan']; ?></td>
        <td><?= $row['divisi']; ?></td>
        <td><?= $row['jabatan']; ?></td>

        <td>
        <a href="edit.php?id_barang=<?= $row['id_barang']; ?>"> Edit</a>
        <a href="hapus.php?id_barang=<?= $row['id_barang']; ?>"> |Hapus</a>
        </td>
    </tr>

    <?php endforeach; ?>
    
    </table>
    </body>
    </html>