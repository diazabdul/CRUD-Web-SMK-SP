<?php
require "init.php";
require "index.php";
$data_anggota = $anggota->getdata();
if(isset($_POST['cari'])){
    $data_anggota=$anggota->cari($_POST["keyword"]);
}
?> 

<section class="konten">
    <center><h1>Daftar Anggota</h1></center>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="post">
            <center><div class="input-group-append">
                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Cari...">
                        <button type="submit" class="btn btn-sm btn-success" name="cari">Cari</button>
                    </div>
                    </center>
                    <br>
                    <button><a href="tambahanggota.php" class="btn btn-sm btn-warning">Tambah</a></button>
                    <button><a href="printsemua.php?id_data=<?= 1;?>" class="btn btn-sm btn-warning" >Print Semua</a></button> 
                </div>
            </form>
        </div>
    </div>
    <br>
        <thead class="thead-dark">
            <table border="1" width="100%">
            <tr>
                <th scope="col">ID Anggota</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_anggota as $row) : ?>
            <tr>
                <td><?= $row['id_anggota'];?></td>
                <td><?= $row['nama_anggota'];?></td>
                <td><?= $row['alamat'];?></td>
                <td>
                 <center><button><a class="btn btn-sm btn-warning" href="updateanggota.php?id_anggota=<?= $row["id_anggota"];?>">Ubah</a></button>
                    <button><a class="btn btn-sm btn-danger" href="hapusanggota.php?id_anggota=<?= $row["id_anggota"];?>" onclick="return confirm('Yakin hapus?');">Hapus</a></button></center>   
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</section>