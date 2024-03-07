<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data User</title>
    <link rel="stylesheet"  href="../../css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 6rem;">
            <div class="row m-3">
                <?php
                include '../../koneksi.php';

                $id = $_GET['iduser'];
                $data = mysqli_query($koneksi, "SELECT * from user where IDuser='$id'");
                while($d = mysqli_fetch_array($data)) {
                ?>
                <div class="col-sm-7">
                    <h1>Silahkan Melengkapi Data Dibawah!!</h1>
                    <form action="e_pmj.php" method="post">
                        <div class="my-3">
                            <label class="form-label">ID User :</label>
                            <input type="text" class="form-control" value="<?php echo $d['IDuser']?>" name="IDuser" readonly>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Nama Lengkap :</label>
                            <input type="text" class="form-control" value="<?php echo $d['namalengkap']?>" name="namalengkap" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Email :</label>
                            <input type="text" class="form-control" value="<?php echo $d['email']?>" name="email" required>
                        </div >
                        <div class="my-3">
                            <label class="form-label">Alamat :</label>
                            <input type="text" class="form-control" value="<?php echo $d['alamat']?>" name="alamat" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Username :</label>
                            <input type="text" class="form-control" value="<?php echo $d['username']?>" name="username" required>
                        </div>  
                        <div class="my-3">
                            <label class="form-label">Password :</label>
                            <input type="password" class="form-control" value="<?php echo $d['password']?>" name="password" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Level : </label>
                            <select class="form-select" name="level">
                                <option selection><?php echo $d['level']?></option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <a href="../anggota.php" class="btn btn-danger">Kembali</a>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>