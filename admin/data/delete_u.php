<?php
include '../../koneksi.php';

$id = $_GET['iduser'];

mysqli_query($koneksi, "DELETE from user where IDuser='$id'");

header("location: ../anggota.php");
?>