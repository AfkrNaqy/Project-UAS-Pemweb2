<?php
include 'connect.php';
$date = date('Y-m-d H:i:s');

$produk = mysqli_query($conn, "select max(kode_transaksi) as kode_transaksi from tb_penjualan");
$data = $produk->fetch_array();
$kode_transaksi = $data['kode_transaksi'] + 1 ;

//Untuk Menginput data Ke Tabel Penjualan
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
 
//Untuk Mengurangi Stok
$data = mysqli_query($conn,"SELECT * FROM tb_temporary");
while($row = mysqli_fetch_array($data)){
    $id_produk=$row['id_produk'];
    $jumlah=$row['jumlah'];
    
    $query = mysqli_query ($conn, "select jumlah_stok from tb_produk where id_produk='".$row['id_produk']."'");
    $row = $query->fetch_array();
    $jumlah_stok = $row['jumlah_stok'] - $jumlah;

    $sql = "UPDATE tb_produk SET 
    jumlah_stok = $jumlah_stok WHERE id_produk=$id_produk";
    mysqli_query($conn, $sql);
}

    // mnghapus semua record pada tabel Temporary
    mysqli_query($conn, "DELETE FROM tb_temporary");


header("location:../cash-home.php");
?>