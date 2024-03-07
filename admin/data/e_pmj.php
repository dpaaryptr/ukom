<?php
include '../../koneksi.php';

if(isset($_POST['update'])) {
    $id = $_POST['IDuser'];
    $nama = $_POST['namalengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $level = $_POST['level'];

    mysqli_query($koneksi, "UPDATE user set namalengkap='$nama', email='$email', alamat='$alamat', username='$user', password='$pass', level='$level' where IDuser='$id'");

                header("location: ../anggota.php");

}
?>