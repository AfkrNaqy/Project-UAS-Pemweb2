<?php
// memanggil file untuk diakses ke dalam file internal
include "connect.php";

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$id_produk = $_POST['id_produk'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$total_harga = $harga * $jumlah; 

// perintah untuk memasukkan kedalam database
$sql ="INSERT INTO tb_temporary SET id_produk='$id_produk',
jumlah='$jumlah',
total_harga = '$total_harga'";

// melakukan perintah sekaligus mengecek apakah data berhasil dieksekusi
// dan masuk ke dalam database atau tidak
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:../cash-home.php");
?>