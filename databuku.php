<?php
require "init.php";
require "index.php";

$data_buku = $buku->getdata();
if(isset($_POST['cari'])){
    $data_buku=$buku->cari($_POST["keyword"]);
}
?> 

<section class="konten">
    <center><h1>Daftar Buku</h1></center>
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
                    <button><a href="printsemua.php?id_data=<?= 0;?>" class="btn btn-sm btn-warning" >Print Semua</a></button> 
                </div>
            </form>
        </div>
    </div>
    <br>
        <thead class="thead-dark">
            <table border="1" width="100%">
            <tr>
                <th scope="col">Id Buku</th>
                <th scope="col">Judul buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_buku as $row) : ?>
            <tr>
                <td><?= $row['id_buku'];?></td>
                <td><?= $row['judul_buku'];?></td>
                <td><?= $row['penulis'];?></td>
                <td>
                    <center>
                        <button><a class="btn btn-sm btn-warning" href="updatebuku.php?id_buku=<?= $row["id_buku"];?>">Ubah</a></button>
                        <button><a class="btn btn-sm btn-danger" href="hapusbuku.php?id_buku=<?= $row["id_buku"];?>" onclick="return confirm('Yakin hapus?');">Hapus</a></button>
                        <button>
        <a class="btn btn-sm btn-warning" href="printsingledata.php?id_data=<?= 0; ?>&id_single_data=<?= $row['id_buku']; ?>">Print</a>
    </button>
                    </center>
                    </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</section>