<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Login </title>
    <!-- menghubungkan desain css dari file yang telah dituju yaitu sty.css -->
    <link rel="stylesheet" href="style.css">
    <!-- link berfungsi untuk mengimport library dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body>
    <!-- ini perubahan -->
    <!-- memasukkan gambar pada halaman web -->
    <!-- <div class="image">
        <img class="logo" src="logo_upn.png" alt="">
    </div> -->
    <!-- membuat box login -->
    <div class="box">
        <!-- berfungsi untuk membuat isi dari box atau card login -->
        <h2>LOGIN</h2>
        <!-- membuat form login yang terhubung dengan file php cem-user.php untuk melakukan
        perintah -->
        <form method="post" action="cek-user.php">
            <!-- membuat input untuk username -->
            <div class="inputBox">
                <input type="text" name="username" required=""></input>
                <label>Username</label>
            </div>
            <!-- membuat input untuk password -->
            <div class="inputBox">
                <input type="password" name="password" required=""></input>
                <label>Password</label>
            </div>
            <!-- tombol submmit untuk memasukkan data yang telah dimasukkan
            kedalam file php yang dituju -->
            <input type="submit" name="submit" value="Submit">
            <a class="text-light ms-2" href="form-signUp.php">Sign Up</a>
        </form>
    </div>
</body>

</html>