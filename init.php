<?php
require "database.php";

$anggota= new database();
$anggota->table= "tb_anggota";
$anggota->filled =['id_anggota','nama_anggota','alamat'];

$buku=new database();
$buku->table= "tb_buku";
$buku->filled =['id_buku','judul_buku','penulis'];

$peminjaman=new database();
$peminjaman->table= "tb_peminjaman";
$peminjaman->filled =['id_peminjaman','id_buku','id_anggota','tanggal_pinjam','tanggal_kembali'];

$user=new database();
$user->table= "tb_petugas";
$user->filled =['username','password','nama_petugas'];
?>