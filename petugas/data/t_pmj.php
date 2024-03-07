<?php
include '../../koneksi.php';

$idbuku = $_POST['IDbuku'];
$iduser = $_POST['IDuser'];
$nama = $_POST['nama'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$status = $_POST['status'];

mysqli_query($koneksi, "INSERT into peminjaman (IDbuku,IDuser,nama,tanggal_pinjam,tanggal_kembali,status)
            values('$idbuku','$iduser','$nama','$tanggal_pinjam','$tanggal_kembali','$status')");

            header("location: ../peminjam.php");
?>