<?php
require('init.php');
$id_buku = $_GET['id_buku'];


if($buku->delete($id_buku) == true){
    header('Location: databuku.php');

}
?>