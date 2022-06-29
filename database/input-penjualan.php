<?php
include 'connect.php';
$date = date('Y-m-d H:i:s');

$produk = mysqli_query($conn, "select max(kode_transaksi) as kode_transaksi from tb_penjualan");
$data = $produk->fetch_array();

$kode_transaksi = $data['kode_transaksi'] + 1 ;

$data = mysqli_query($conn,"SELECT * FROM tb_temporary");
while($row = mysqli_fetch_array($data)){
    $id_produk=$row['id_produk'];
    $jumlah=$row['jumlah'];
    $total_harga=$row['total_harga'];

    $sql = "INSERT INTO tb_penjualan SET 
    kode_transaksi = '$kode_transaksi',
    id_produk ='$id_produk',
    jumlah = '$jumlah',
    total_harga ='$total_harga',
    tgl_penjualan ='$date'";
    mysqli_query($conn, $sql);
}
 
    $sql_temp = mysqli_query($conn,"SELECT * FROM tb_temporary");
    $row = mysqli_fetch_array($sql_temp);
    $jml= $row['jumlah'];
    $sql_produk = mysqli_query($conn,"SELECT * FROM tb_temporary");
    $row2 = mysqli_fetch_array($sql_produk);
    $jumlah_stok= $row['jumlah_stok'];
    $stok_baru = $jumlah_stok - $jml;

    mysqli_query($conn, "DELETE FROM tb_temporary");


//proses penyimpanan ke database

header("location:../cash-home.php");

?>