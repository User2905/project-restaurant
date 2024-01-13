<?php include '../H-F/Header.php'; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pelanggan</h4>
        </div>
        <div class="panel-body">
            <form action="" method="get">
                <label>Cari :</label>
                <input type="text" name="cari">
                <input type="submit" value="Cari">
            </form>

            <a href="pelanggan_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br/>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama</th>
                        <th>HP</th>
                        <th>Alamat</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "../koneksi.php";

                    if (isset($_GET['cari'])) {
                        $cari = $_GET['cari'];
                        echo "<b>Hasil pencarian : " . $cari . "</b>";
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE namaPelanggan LIKE '%" . $cari . "%'");
                    } else {
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan");
                    }
                    $no = 1;
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $d['namaPelanggan'];?></td>
                            <td><?php echo $d['hpPelanggan'];?></td>
                            <td><?php echo $d['alamatPelanggan'];?></td>
                            <td>
                                <a href="Pelanggan_edit.php?id=<?php echo $d['idPelanggan']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="Pelanggan_hapus.php?id=<?php echo $d['idPelanggan']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
