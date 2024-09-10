<?php
require "init.php";
require "index.php";
$data_pinjam = $peminjaman->getdata();
if(isset($_POST['cari'])){
    $data_pinjam=$peminjaman->cari($_POST["keyword"]);
}
?> 

<section class="konten">
<center><h1>DATA PINJAMAN</h1></center>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                <center><div class="input-group-append">
                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Cari...">
                        <button type="submit" class="btn btn-sm btn-success" name="cari">Cari</button>
                    </div>
                    </center>
                    <br>
                    <button><a href="tambahbuku.php" class="btn btn-sm btn-warning">Tambah</a></button>
                    <button><a href="printsemua.php?id_data=<?= 2;?>" class="btn btn-sm btn-warning" >Print Semua</a></button>

                </div>
            </form>
        </div>
    </div>
    <br>
    <table border="1" width="100%">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id Pinjaman</th>
                <th scope="col">Id Buku</th>
                <th scope="col">Id Anggota</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_pinjam as $row) : ?>
            <tr>
                <td><?= $row['id_peminjaman'];?></td>
                <td><?= $row['id_buku'];?></td>
                <td><?= $row['id_anggota'];?></td>
                <td><?= $row['tanggal_pinjam']; ?></td>
                <td><?= $row['tanggal_kembali']; ?></td>
                <td>
                    <button><a class="btn btn-sm btn-warning" href="updatepeminjaman.php?id_peminjaman=<?= $row["id_peminjaman"];?>">Ubah</a> </button>
                    <button><a class="btn btn-sm btn-danger" href="hapuspinjam.php?id_peminjaman=<?= $row["id_peminjaman"];?>" onclick="return confirm('Yakin hapus?');">Hapus</a></button>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</section>