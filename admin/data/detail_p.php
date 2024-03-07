<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Detail Peminjam</title>
    <link rel="stylesheet"  href="../../css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 4rem;">
            <div class="row" >
            <?php
            include '../../koneksi.php';
            if(isset($_GET['idp'])) {
                $id = $_GET['idp'];
            } else {
                die("gagal");
            }
            $data = mysqli_query($koneksi, "SELECT * from peminjaman where IDpeminjaman='$id'");
            $result = mysqli_fetch_array($data);
            ?>
            <div class="col m-3">
                <h1>Detail Peminjam</h1> <hr>
                    <table>
                    <tr>
                        <td><h5>ID Peminjaman</h5></td>
                        <td><h5>: <?php echo $result['IDpeminjaman'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>ID Buku</h5></td>
                        <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>ID User</h5></td>
                        <td><h5>: <?php echo $result['IDuser'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Nama Lengkap</h5></td>
                        <td><h5>: <?php echo $result['nama'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Tanggal Pinjam</h5></td>
                        <td><h5>: <?php echo $result['tanggal_pinjam'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Tanggal Kembali</h5></td>
                        <td><h5>: <?php echo $result['tanggal_kembali'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5 class="text-warning">Status Peminjaman</h5></td>
                        <td><h5 class="text-warning">: <?php echo $result['status'];?></h5></td>
                    </tr>
                </table> 
                    <a href="../peminjam.php" class="btn btn-danger mt-3">Kembali</a>
                    <hr>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>