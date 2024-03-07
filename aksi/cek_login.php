<?php
include '../koneksi.php';
session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * from user where username='$user' and password='$pass'");
$cek = mysqli_num_rows($login);

if($cek > 0) {

    $data = mysqli_fetch_assoc($login);
    if($data['level']=="admin") {
        $_SESSION ['username'] = $user;
        $_SESSION ['level'] = "admin";

        header("location: ../admin/index_adm.php");

    }else if($data['level']=="petugas") {
        $_SESSION ['username'] = $user;
        $_SESSION ['level'] = "petugas";

        header("location: ../petugas/index_ptg.php");

    }else if($data['level']=="pengguna") {
        $_SESSION ['username'] = $user;
        $_SESSION ['level'] = "pengguna";

        header("location: ../pengguna/index_png.php");

    }else{
        header("location: ../index.php?pesan=gagal");
    }
}else{
    header("location: ../index.php?pesan=gagal");
}
?>