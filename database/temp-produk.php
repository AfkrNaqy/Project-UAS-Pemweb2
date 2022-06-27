<?php
include "connect.php";

$produk = array();
$jumlah = array();
$harga = array();


$query = mysqli_query($conn, 'SELECT * FROM tb_produk');
$data = mysqli_fetch_array($query);
if (count($produk)!=null || count($jumlah)!=null || count($harga)!=null) {
    echo "Tambah gagal";
}else{
    $produk = array($data['nama_produk']);
    $jumlah = array($data['jumlah_stok']);
    $harga = array($data['harga']);
    echo "tambah berhasil";
    // header("Location: ../cash-home.php");
}
// exit();
?>