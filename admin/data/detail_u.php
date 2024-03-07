<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Detail User</title>
    <link rel="stylesheet"  href="../../css/css/bootstrap.rtl.css">
</head>
<body>
    <div class="container">
        <div class="card" style="margin-top: 4rem;">
            <div class="row" >
            <?php
            include '../../koneksi.php';
            if(isset($_GET['iduser'])) {
                $id = $_GET['iduser'];
            } else {
                die("gagal");
            }
            $data = mysqli_query($koneksi, "SELECT * from user where IDuser='$id'");
            $result = mysqli_fetch_array($data);
            ?>
            <div class="col m-3">
                <h1>Detail User</h1> <hr>
                    <table>
                    <tr>
                        <td><h5>Nama Lengkap</h5></td>
                        <td><h5>: <?php echo $result['namalengkap'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>ID User</h5></td>
                        <td><h5>: <?php echo $result['IDuser'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Email</h5></td>
                        <td><h5>: <?php echo $result['email'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Alamat</h5></td>
                        <td><h5>: <?php echo $result['alamat'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Username</h5></td>
                        <td><h5>: <?php echo $result['username'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Password</h5></td>
                        <td><h5>: <?php echo $result['password'];?></h5></td>
                    </tr>
                    <tr>
                        <td><h5 class="text-warning">Level</h5></td>
                        <td><h5 class="text-warning">: <?php echo $result['level'];?></h5></td>
                    </tr>
                </table> 
                    <a href="../anggota.php" class="btn btn-danger mt-3">Kembali</a>
                    <hr>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>