<?php
include 'layout/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-3">Halaman Buku</h3>
            <a href="data/t_buku.php" class="btn btn-success my-1">Tambah</a>
            <table class="table my-2">
                <thead class="table table-success">
                    <tr>
                        <th>IDbuku</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                include '../koneksi.php';

                $data = mysqli_query($koneksi, "SELECT * from buku");
                while($d = mysqli_fetch_array($data)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $d['IDbuku'];?></td>
                        <td><?php echo $d['judul'];?></td>
                        <td><?php echo $d['penulis'];?></td>
                        <td>
                            <a href="data/detail_b.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-success">Detail</a>
                            <a href="data/edit_b.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary">Edit</a>
                            <a href="data/delete_b.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php
include 'layout/footer.php';
?>