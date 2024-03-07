<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Detail Buku</title>
    <link rel="stylesheet"  href="../../css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 4rem;">
            <div class="row" >
            <?php
            include '../../koneksi.php';
            if(isset($_GET['idbuku'])) {
                $id = $_GET['idbuku'];
            } else {
                die("gagal");
            }
            $data = mysqli_query($koneksi, "SELECT * from buku where IDbuku='$id'");
            $result = mysqli_fetch_array($data);
            ?>
            <div class="col text-center m-4">
                <img src="../../petugas/asset/<?php echo $result['foto'];?>" alt="" width="300">
            </div>
            <div class="col" style="margin-top: 4rem;">
                <h1>Detail Buku</h1> <hr>
                    <table>
                    <tr>
                        <td><h5>ID Peminjaman</h5></td>
                        <td><h5> : <?php echo $result['IDbuku'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>ID Buku</h5></td>
                        <td><h5> : <?php echo $result['judul'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>ID User</h5></td>
                        <td><h5> : <?php echo $result['penulis'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Nama Lengkap</h5></td>
                        <td><h5> : <?php echo $result['penerbit'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Tanggal Pinjam</h5></td>
                        <td><h5> : <?php echo $result['tahunterbit'];?></h5></td>
                    </tr>
                </table> 
                    <a href="../buku.php" class="btn btn-danger mt-3">Kembali</a>
                    <hr>
                    
                </div> 
            </div>
        </div>
    </div>
</body>
</html>