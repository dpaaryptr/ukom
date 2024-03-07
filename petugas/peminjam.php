<?php
include 'layout/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-3">Halaman Peminjam</h3>
            <a href="data/t_pinjam.php" class="btn btn-success my-1">Tambah</a>
            <table class="table my-2">
                <thead class="table table-success">
                    <tr>
                        <th>IDpeminjam</th>
                        <th>Nama Peminjam</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                include '../koneksi.php';

                $data = mysqli_query($koneksi, "SELECT * from peminjaman");
                while($d = mysqli_fetch_array($data)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $d['IDpeminjaman'];?></td>
                        <td><?php echo $d['nama'];?></td>
                        <td><?php echo $d['status'];?></td>
                        <td>
                            <a href="data/detail_p.php?idp=<?php echo $d['IDpeminjaman'];?>" class="btn btn-success">Detail</a>
                            <a href="data/edit_p.php?idp=<?php echo $d['IDpeminjaman'];?>" class="btn btn-primary">Edit</a>
                            <a href="data/delete_p.php?idp=<?php echo $d['IDpeminjaman'];?>" class="btn btn-danger">Delete</a>
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