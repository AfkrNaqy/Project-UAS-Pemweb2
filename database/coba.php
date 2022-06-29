<?php
include 'connect.php';

$query = mysqli_query($conn, 'SELECT kode_transaksi FROM tb_penjualan');
$data = $query->fetch_array();
echo(max($data));
?>