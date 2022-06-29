<?php
// memanggil file untuk diakses ke dalam file internal
include "connect.php";
$id_produk = $_POST['id_produk'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$total_harga = $harga * $jumlah; 

$sql = "SELECT * FROM tb_temporary WHERE id_produk='$id_produk'";
$result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        $query ="UPDATE tb_temporary SET jumlah='$jumlah',
        total_harga = '$total_harga' 
        WHERE id_produk = $id_produk";
        mysqli_query($conn, $query);
    }else{
        // perintah untuk memasukkan kedalam database
        $query ="INSERT INTO tb_temporary SET id_produk='$id_produk',
        jumlah='$jumlah',
        total_harga = '$total_harga'";
        mysqli_query($conn, $query);
    }

// melakukan perintah sekaligus mengecek apakah data berhasil dieksekusi
// dan masuk ke dalam database atau tidak

header("location:../cash-home.php");
?>