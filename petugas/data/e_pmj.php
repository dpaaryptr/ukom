<?php
include '../../koneksi.php';

if(isset($_POST['update'])) {
    $id = $_POST['IDpeminjaman'];
    $idbuku = $_POST['IDbuku'];
    $iduser = $_POST['IDuser'];
    $nama = $_POST['nama'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $status = $_POST['status'];

    mysqli_query($koneksi, "UPDATE peminjaman set IDbuku='$idbuku', IDuser='$iduser', nama='$nama', tanggal_pinjam='$tanggal_pinjam', tanggal_kembali='$tanggal_kembali', status='$status' where IDpeminjaman='$id'");

                header("location: ../peminjam.php");

}
?>