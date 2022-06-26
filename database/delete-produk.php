<?php
    include "connect.php";
    
    $id_produk = $_GET['id_produk']; 
    mysqli_query($conn, "DELETE FROM tb_product WHERE id_produk = $id_produk");
    header("location:../adm-product.php");
?>