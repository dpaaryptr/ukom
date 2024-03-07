<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
    <link rel="stylesheet"  href="../../css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 6rem;">
            <div class="row m-3">
                <div class="col-sm-7">
                <samp>--- Form Tambah Data Buku ---</samp>
                    <h1>Silahkan Melengkapi Data Dibawah!!</h1>
                    <form action="t_bk.php" method="post" enctype="multipart/form-data">
                        <div class="my-3">
                            <label class="form-label">Judul Buku :</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Penulis Buku :</label>
                            <input type="text" class="form-control" name="penulis" required>
                        </div >
                        <div class="row">
                            <div class="col">
                                <div class="my-3">
                                    <label class="form-label">Penerbit :</label>
                                    <input type="text" class="form-control" name="penerbit" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-3">
                                    <label class="form-label">Tahun Terbit :</label>
                                    <input type="text" class="form-control" name="tahunterbit" required>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Upload Foto :</label>
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <a href="../buku.php" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>