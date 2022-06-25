<?php
include "connect.php";

$sql = "CREATE TABLE tb_produk (
    id_produk INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(50) NOT NULL,
    harga int(50) NOT NULL,
    jumlah_stok int(50) NOT NULL
    )";

if(mysqli_query($conn, $sql)){
    echo "New Table created successfully";
}else{
    echo "Error : ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>