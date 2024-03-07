<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet"  href="css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 6rem;">
            <div class="row">
                <div class="col-sm-7 m-3">
                    <h1>Silahkan Melengkapi Data Dibawah!!</h1>
                    <form action="aksi/cek_daftar.php" method="post">
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
                                <option value="petugas">Petugas</option>
                                <option value="pengguna">Pengguna</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Registrasi</button>
                    </form>
                    <p class="mt-3">Jika Sudah Memiliki Akun Klik <a href="index.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>