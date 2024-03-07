<?php
include 'layout/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-3">Halaman User</h3>
            <a href="data/tambah_user.php" class="btn btn-success my-1">Tambah</a>
            <table class="table my-2">
                <thead class="table table-success">
                    <tr>
                        <th>IDuser</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                include '../koneksi.php';

                $data = mysqli_query($koneksi, "SELECT * from user");
                while($d = mysqli_fetch_array($data)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $d['IDuser'];?></td>
                        <td><?php echo $d['namalengkap'];?></td>
                        <td><?php echo $d['username'];?></td>
                        <td><?php echo $d['level'];?></td>
                        <td>
                            <a href="data/detail_u.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-success">Detail</a>
                            <a href="data/edit_u.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-primary">Edit</a>
                            <a href="data/delete_u.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-danger">Delete</a>
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