<?php
include '../../koneksi.php';

$id = $_GET['idp'];

mysqli_query($koneksi, "DELETE from peminjaman where IDpeminjaman='$id'");

header("location: ../peminjam.php");
?>