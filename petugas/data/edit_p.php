<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Buku</title>
    <link rel="stylesheet"  href="../../css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 6rem;">
            <div class="row m-3">
                <?php
                include '../../koneksi.php';

                $id = $_GET['idp'];
                $data = mysqli_query($koneksi, "SELECT * from peminjaman where IDpeminjaman='$id'");
                while($d = mysqli_fetch_array($data)) {
                ?>
                <div class="col-sm-7">
                    <h1>Silahkan Melengkapi Data Dibawah!!</h1>
                    <form action="e_pmj.php" method="post">
                        <div class="my-3">
                            <label class="form-label">ID Peminjaman :</label>
                            <input type="text" class="form-control" value="<?php echo $d['IDpeminjaman']?>" name="IDpeminjaman" readonly>
                        </div>
                        <div class="my-3">
                            <label class="form-label">ID Buku :</label>
                            <input type="text" class="form-control" value="<?php echo $d['IDbuku']?>" name="IDbuku" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">ID User :</label>
                            <input type="text" class="form-control" value="<?php echo $d['IDuser']?>" name="IDuser" required>
                        </div >
                        <div class="my-3">
                            <label class="form-label">Nama Lengkap :</label>
                            <input type="text" class="form-control" value="<?php echo $d['nama']?>" name="nama" required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="my-3">
                                    <label class="form-label">Tanggal Pinjam :</label>
                                    <input type="date" class="form-control" value="<?php echo $d['tanggal_pinjam']?>" name="tanggal_pinjam" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-3">
                                    <label class="form-label">Tanggal Pengembalian :</label>
                                    <input type="date" class="form-control" value="<?php echo $d['tanggal_kembali']?>" name="tanggal_kembali" required>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Status : </label>
                            <select class="form-select" name="status">
                                <option selection></option>
                                <option value="dipinjam">Pinjam</option>
                                <option value="diproses">Proses</option>
                                
                            </select>
                        </div>
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <a href="../peminjam.php" class="btn btn-danger">Kembali</a>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>