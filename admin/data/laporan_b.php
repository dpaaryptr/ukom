<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Buku</title>
    <link rel="stylesheet"  href="../../css/css/bootstrap.rtl.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col text-center my-3">
            <h2>SMA 1 Singapura</h2>
            <h5>Aplikasi Perpustakaan Digital Sekolah</h5>
            <samp>Data ini diambil dari seluruh member perpustakaan digital</samp>
        </div>
    </div>
    <div class="row">
        <table class="table my-3">
            <thead class="table table-success">
                <tr>
                    <th>IDbuku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>foto</th>
                </tr>
            </thead>
            <?php
            include '../../koneksi.php';

            $data = mysqli_query($koneksi, "SELECT * from buku");
            while($d = mysqli_fetch_array($data)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $d['IDbuku'];?></td>
                    <td><?php echo $d['judul'];?></td>
                    <td><?php echo $d['penulis'];?></td>
                    <td><?php echo $d['penerbit'];?></td>
                    <td><?php echo $d['tahunterbit'];?></td>
                    <td><?php echo $d['foto'];?></td>                    
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <div class="row">
            <div class="col">
                <p class="mb-1">Mengetahui :</p>
                <p>Kepala Sekolah SMAN 1 Singapura</p>
                <p style="margin-top: 4rem;">Drs. Haji Sulaiman S.kom.</p>
            </div>
        </div>
    </div>
</div>
<script>
    window.print();
</script>

</body>
</html>