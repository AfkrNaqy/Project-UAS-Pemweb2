<?php
    // menghubungkan connect.php kedalam program
    include "connect.php";

 
    if (isset($_SESSION['username'])) {
        header("Location: adm-home.php");
    }
    
    // untuk melakukan pengecekan pada data form yang telah diisi
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // mengambil data dari tabel yang telah dibuat pada database myweb 
        // yang telah dibuat sebelumnya
        $sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        // melakukan pengecekan pada query dan data form yang telah dimasukkan
        if ($result->num_rows > 0) {
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            // mengalihkan pada file beranda_page.php ketika username dan password
            // benar atau username dan password sama dengan yang ada di database
            header("Location: /adm-home.php");
        } else {
            // memberikan pesan alert ketika user memasukkan username atau password yang salah
            echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
?>