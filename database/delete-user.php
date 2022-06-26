<?php
    include "connect.php";
    
    $id_user = $_GET['id_user'];
    mysqli_query($conn, "DELETE FROM tb_user WHERE id_user = $id_user");
    header("location:../adm-manageUser.php");
?>