<?php
include "connect.php";

$sql = "CREATE TABLE tb_penjualan (
    id_penjualan INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_produk VARCHAR(11) NOT NULL,
    jumlah int(11) NOT NULL,
    tgl_penjualan DATE NOT NULL
    )";

if(mysqli_query($conn, $sql)){
    echo "New Table created successfully";
}else{
    echo "Error : ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>