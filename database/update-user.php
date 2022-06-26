<?php
    include "connect.php";

    $id_user=$_POST['id_user'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    mysqli_query($conn, "UPDATE tb_user SET name='$name', address='$address', email='$email', role='$role', username='$username', password='$password' WHERE id_user = $id_user");
    header("location:../adm-manageUser.php");
?>