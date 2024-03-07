<?php
include '../../koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];
$foto = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];

move_uploaded_file($file, '../asset/'. $foto);
mysqli_query($koneksi, "INSERT into buku values('','$judul','$penulis','$penerbit','$tahunterbit','$foto')");

header("location: ../buku.php");
?>