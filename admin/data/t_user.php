<?php
include '../../koneksi.php';

$nama = $_POST['namalengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$user = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT into user (namalengkap,email,alamat,username,password,level)
            values('$nama','$email','$alamat','$user','$pass','$level')");

            header("location: ../anggota.php");
?>