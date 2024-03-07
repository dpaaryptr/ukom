<?php
include '../../koneksi.php';

if(isset($_POST['update'])) {
    $id = $_POST['IDbuku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahunterbit = $_POST['tahunterbit'];
    $foto = $_FILES['foto']['name'];
    $file = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file, '../asset/'. $foto);
    mysqli_query($koneksi, "UPDATE buku set judul='$judul', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit', foto='$foto' where IDbuku='$id' ");

    header("location: ../buku.php");

}

?>