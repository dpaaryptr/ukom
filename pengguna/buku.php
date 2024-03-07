<?php
include 'layout/header.php';
?>

<div class="container">
    <div class="row">
    <?php
    include '../koneksi.php';

    $data = mysqli_query($koneksi, "SELECT * from buku order by IDbuku asc");
    while($d = mysqli_fetch_array($data)) {
    ?>
        <div class="card m-3" style="width: 15rem; border-radius: 1rem;">
            <img src="../petugas/asset/<?php echo $d['foto'];?>" alt="" class="mt-2" style="border-radius: 1rem;">
            <div class="card-body">
                <h4 class="card-title"><?php echo $d['judul'];?></h4>    
                <h6>Tahun Terbit : <?php echo $d['tahunterbit'];?></h6>
                <a href="data/detail.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary">Detail</a> 
                <a href="data/pinjam.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-warning">Pinjam</a> 
            </div>
        </div>
    <?php } ?>
    </div>
</div>

<?php
include 'layout/footer.php';
?>