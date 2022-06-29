<?php
include 'connect.php';
$date = date('Y-m-d H:i:s');

$query = mysqli_query($conn, 'SELECT kode_transaksi FROM tb_penjualan');
$data = $query->fetch_array();
echo(max($data));

$data = mysqli_query($conn,"SELECT * FROM tb_temporary");
while($row = mysqli_fetch_array($data)){
    $id_produk=$row['id_produk'];
    $jumlah=$row['jumlah'];
    $total_harga=$row['total_harga'];

    $sql = "INSERT INTO tb_penjualan SET 
    id_produk ='$id_produk',
    jumlah = '$jumlah',
    total_harga ='$total_harga',
    tgl_penjualan ='$date'";
    mysqli_query($conn, $sql);
}


//proses penyimpanan ke database

header("location:../cash-home.php");

?>