<?php
    include "connect.php";
    
    $id_temp = $_GET['id_temp']; 
    mysqli_query($conn, "DELETE FROM tb_temporary WHERE id_temp = $id_temp");
    header("location:../cash-home.php");
?>