<?php
include 'layout/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 bg-success">
                <div class="card-body">
                    <h2 class="text-center text-light">Data Anggota</h2>
                </div>
                <a href="data/laporan_a.php" class="btn btn-sm btn-dark">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="col">
            <div class="card mt-3 bg-success">
                <div class="card-body">
                    <h2 class="text-center text-light">Data Buku</h2>
                </div>
                <a href="data/laporan_b.php" class="btn btn-sm btn-dark">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="col">
            <div class="card mt-3 bg-success">
                <div class="card-body">
                    <h2 class="text-center text-light">Data Peminjam</h2>
                </div>
                <a href="data/laporan_p.php" class="btn btn-sm btn-dark">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</div>


<?php
include 'layout/footer.php';
?>