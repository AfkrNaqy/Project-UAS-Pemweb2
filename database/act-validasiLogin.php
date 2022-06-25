<?php
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$data = mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' AND password='$password' AND role='$role'");
$cek = mysqli_num_rows($data);

if($cek > 0 and $role='Admin'){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: ../adm-home.php");
}else if($cek > 0 and $role='Cashier'){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: ../cash-home.php");
}else{
    header("location:form-login.php?pesan=gagal");
}
?>