<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah User</title>
    <link rel="stylesheet"  href="../../css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 6rem;">
            <div class="row m-3">
                <div class="col-sm-7 ">
                    <samp>--- Form Tambah Data User ---</samp>
                    <h1>Silahkan Melengkapi Data Dibawah!!</h1>
                    <form action="t_user.php" method="post">
                        <div class="my-3">
                            <label class="form-label">Nama Lengkap :</label>
                            <input type="text" class="form-control" name="namalengkap" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Email :</label>
                            <input type="email" class="form-control" name="email" required>
                        </div >
                        <div class="my-3">
                            <label class="form-label">Alamat :</label>
                            <input type="text" class="form-control" name="alamat" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Username :</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Password :</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Level : </label>
                            <select class="form-select" name="level">
                                <option selection></option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                <option value="pengguna">Pengguna</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Tambah</button>
                        <a href="../anggota.php" class="btn btn-danger me-2 mt-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>