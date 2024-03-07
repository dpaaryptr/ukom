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

                $id = $_GET['idbuku'];
                $data = mysqli_query($koneksi, "SELECT * from buku where IDbuku='$id'");
                while($d = mysqli_fetch_array($data)) {
                ?>
                <div class="col-sm-7">
                    <h1>Silahkan Melengkapi Data Dibawah!!</h1>
                    <form action="e_bk.php" method="post" enctype="multipart/form-data">
                        <div class="my-3">
                            <label class="form-label">ID Buku :</label>
                            <input type="text" class="form-control" value="<?php echo $d['IDbuku']?>" name="IDbuku" readonly>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Judul Buku :</label>
                            <input type="text" class="form-control" value="<?php echo $d['judul']?>" name="judul" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Penulis Buku :</label>
                            <input type="text" class="form-control" value="<?php echo $d['penulis']?>" name="penulis" required>
                        </div >
                        <div class="row">
                            <div class="col">
                                <div class="my-3">
                                    <label class="form-label">Penerbit :</label>
                                    <input type="text" class="form-control" value="<?php echo $d['penerbit']?>" name="penerbit" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-3">
                                    <label class="form-label">Tahun Terbit :</label>
                                    <input type="text" class="form-control" value="<?php echo $d['tahunterbit']?>" name="tahunterbit" required>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Upload Foto :</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <a href="../buku.php" class="btn btn-danger">Kembali</a>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>