<?php
include '../../koneksi.php';

$id = $_GET['idbuku'];

mysqli_query($koneksi, "DELETE from buku where IDbuku='$id'");

header("location: ../buku.php");
?>