<?php
// memanggil file untuk diakses ke dalam file internal
include "connect.php";

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$nama=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$vrole= $_POST['role'];
$username=$_POST['username'];
$pass=$_POST['password'];

// perintah untuk memasukkan kedalam database
$sql ="INSERT INTO tb_user SET name='$nama',
address='$address',
email='$email',
role='$vrole',
username='$username',
password='$pass'";

// melakukan perintah sekaligus mengecek apakah data berhasil dieksekusi
// dan masuk ke dalam database atau tidak
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:../form-login.php");
?>
