<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pinjam Buku</title>
    <link rel="stylesheet"  href="../../css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 6rem;">
            <div class="row m-3">
                <div class="col-sm-7">
                <samp>--- Form Tambah Data Peminjam ---</samp>
                    <h1>Silahkan Melengkapi Data Dibawah!!</h1>
                    <form action="t_pmj.php" method="post">
                        <div class="my-3">
                            <label class="form-label">ID Buku :</label>
                            <select name="IDbuku" class="form-select">
                                <option value=""></option>
                                <option value="8">8 - Buku Flowchart</option>
                                <option value="9">9 - Buku DrawIo</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label class="form-label">ID User :</label>
                            <input type="text" class="form-control" name="IDuser" required>
                        </div >
                        <div class="my-3">
                            <label class="form-label">Nama Lengkap :</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="my-3">
                                    <label class="form-label">Tanggal Pinjam :</label>
                                    <input type="date" class="form-control" name="tanggal_pinjam" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-3">
                                    <label class="form-label">Tanggal Pengembalian :</label>
                                    <input type="date" class="form-control" name="tanggal_kembali" required>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Status : </label>
                            <select class="form-select" name="status">
                                <option selection></option>
                                <option value="dipinjam">Pinjam</option>
                                <option value="diproses">Proses</option>
                                <option value="dikembalikan">Dikembalikan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <a href="../peminjam.php" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>