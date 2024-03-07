<?php
include 'layout/header.php';
?>

<div class="container">
    <?php
    include '../koneksi.php';
    session_start();

    $user = mysqli_query($koneksi, "SELECT * from user");
    $buku = mysqli_query($koneksi, "SELECT * from buku");
    $peminjam = mysqli_query($koneksi, "SELECT * from peminjaman");

    $u = mysqli_num_rows($user);
    $b = mysqli_num_rows($buku);
    $p = mysqli_num_rows($peminjam);
    ?>
    <div class="row my-3">
        <div class="col">
            <div class="card">
                <div class="card-body bg-info text-white text-center">
                    <h1><b><?php echo $u;?></b></h1>
                    <h2>Data Anggota</h2>
                </div>
                <a href="anggota.php" class="btn btn-dark btn-sm">Lihat</a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body bg-warning text-white text-center">
                    <h1><b><?php echo $b;?></b></h1>
                    <h2>Data Buku</h2>
                </div>
                <a href="buku.php" class="btn btn-dark btn-sm">Lihat</a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body bg-primary text-white text-center">
                    <h1><b><?php echo $p;?></b></h1>
                    <h2>Data Peminjam</h2>
                </div>
                <a href="peminjaman.php" class="btn btn-dark btn-sm">Lihat</a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body bg-secondary text-white text-center">
                    <h1><b>3</b></h1>
                    <h2>Data Laporan</h2>
                </div>
                <a href="laporan.php" class="btn btn-dark btn-sm">Lihat</a>
            </div>
        </div>
        <div class="row" style="margin-top: 9rem;">
            <div class="col">
            <h2>Selamat Datang</h2>
            <h5>Di Halaman Perpustakaan Digital, Admin</h4>
            <samp>Selamat membaca semua</samp>
            </div>
        </div>
    </div>
</div>

<?php
include 'layout/footer.php';
?>