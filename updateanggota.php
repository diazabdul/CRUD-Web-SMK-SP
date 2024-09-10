<?php
require('init.php');
$id_anggota = $_GET['id_anggota'];
$b = $anggota->getdataSingle($id_anggota);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update'])) {
        // $id_menu = generateMenuID($conn);
        // $name = $_POST['name'];
        // $price = $_POST['price'];
        // $stock = $_POST['stock'];
        // $sql = "INSERT INTO menu (id_menu, name, price, stock) VALUES ('$id_menu', '$name', $price, $stock)";
        // $conn->query($sql);
        
        $anggota->data = [$_POST['id_anggota'],$_POST['nama_anggota'],$_POST['alamat']];
        
        

        if($anggota->update() == true){
            header('Location: dataanggota.php');
        }
    }
    
}
?>
<!DOCTYPE html>
<h1>Update Data</h1>    
    <form method="post">
        <label>Id Buku: <input type="text" name="id_anggota" required value="<?= $id_anggota;?>" readonly></label><br>
        <label>Judul Buku: <input type="text" name="nama_anggota" required></label><br>
        <label>Penulis: <input type="text" name="alamat" required></label><br>
        <button type="submit" name="update">Update</button>
    </form>
</html>