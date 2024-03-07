<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet"  href="css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 12rem;">
            <div class="row">
                <div class="col-sm-7 m-3">
                    <h1>Silahkan Melengkapi Data Dibawah!!</h1>
                    <form action="aksi/cek_login.php" method="post" autocomplete="off">
                        <div class="my-3">
                            <label class="form-label">Username :</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Password :</label>
                            <input type="password" class="form-control" name="password" required>
                        </div >
                        <button type="submit"  class="btn btn-success">Login</button>
                    </form>
                <p class="mt-4">Jika Belum Memiliki Akun Klik <a href="registrasi.php">Registrasi</a></p>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>