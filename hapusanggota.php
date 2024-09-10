<?php
require('init.php');
$id_buku = $_GET['id_anggota'];


if($anggota->delete($id_buku) == true){
    header('Location: dataanggota.php');

}
?>