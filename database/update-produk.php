<?php
    include "connect.php";

    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $harga=$_POST['harga'];
    $jumlah_stok=$_POST['jumlah_stok'];
    
    mysqli_query($conn, "UPDATE tb_produk SET nama_produk='$nama_produk', harga='$harga', jumlah_stok='$jumlah_stok' WHERE id_produk = $id_produk");
    header("location:../adm-product.php");
?>