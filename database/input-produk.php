<?php
// memanggil file untuk diakses ke dalam file internal
include "connect.php";

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$nama_produk=$_POST['nama_produk'];
$harga=$_POST['harga'];
$jumlah_stok=$_POST['jumlah_stok'];

// perintah untuk memasukkan kedalam database
$sql ="INSERT INTO tb_produk SET nama_produk='$nama_produk',
harga='$harga',
jumlah_stok='$jumlah_stok'";

// melakukan perintah sekaligus mengecek apakah data berhasil dieksekusi
// dan masuk ke dalam database atau tidak
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:../adm-product.php");
?>