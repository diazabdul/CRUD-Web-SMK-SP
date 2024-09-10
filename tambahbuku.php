<?php
require('init.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['tambah'])) {
        // $id_menu = generateMenuID($conn);
        // $name = $_POST['name'];
        // $price = $_POST['price'];
        // $stock = $_POST['stock'];
        // $sql = "INSERT INTO menu (id_menu, name, price, stock) VALUES ('$id_menu', '$name', $price, $stock)";
        // $conn->query($sql);
        
        $buku->data = [$_POST['id_buku'],$_POST['judul_buku'],$_POST['penulis']];
        
        if($buku->save()){
            header('Location: databuku.php');
        }
    }
}
?>
<!DOCTYPE html>
<h1>Tambah Data</h1>    
    <form method="post">
        <label>Id Buku: <input type="text" name="id_buku" required></label><br>
        <label>Judul Buku: <input type="text" name="judul_buku" required></label><br>
        <label>Penulis: <input type="text" name="penulis" required></label><br>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</html>