<!DOCTYPE HTML>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM - Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<style>
* {
    font-family: 'Josefin Sans', sans-serif;
}

.body {
    background: #e4e6c3;
}
</style>

<body class="body">
    <?php session_start(); ?>
    <!-- ini navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid mx-2">
            <a class="navbar-brand ms-2" href="#"><img src="img\logo.png" alt="" width=55px height=45px></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="adm-home.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="adm-manageUser.php">User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="adm-product.php">Product</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="adm-report.php" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Report
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="adm-report.php#Product">Product</a></li>
                            <li><a class="dropdown-item" href="adm-report.php#Payment">Payment</a></li>
                            <li><a class="dropdown-item" href="adm-report.php#Print">Print</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropstart btn-group">
                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img
                                src="img/person_account.svg" alt="" /> </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
                            aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-item-text">
                                <h5>Admin</h5>
                                <p> <?php echo $_SESSION['username']; ?> </p>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ini akhir navbar -->

    <!-- ini untuk searach dan button tambah -->
    <div class="row justify-content-center">
        <div class="col-sm-11">
            <div class="d-flex justify-content-between my-2">
                <div>
                    <h4>PRODUK</h4>
                </div>
                <div class="d-flex">
                    <form action="adm-product.php" method="get">
                        <div class="input-group">
                            <input type="text" name="cari" class="form-control" placeholder="Search"
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <button class="btn btn-outline-secondary bg-primary" type="submit" id="button-addon1"><img
                                    type="submit" src="img\icon-search-white.png" width=20px height=20px alt="">
                            </button>

                        </div>
                    </form>
                    <a href="adm-addProduct.php" class="btn btn-primary ms-3">
                        <img src="img\icon-add-white.svg" alt="">
                        ADD
                    </a>
                </div>
            </div>
            <div class="table table-hover">
                <?php
                    include "database/connect.php";
                    if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                    }
                ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td scope="col">Id</td>
                            <td scope="col">Nama Produk</td>
                            <td scope="col">Jumlah Produk</td>
                            <td scope="col">Harga Produk</td>
                            <td scope="col">Tindakan</td>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                            if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                $query = mysqli_query($conn,"SELECT * from tb_produk where nama_produk like '%".$cari."%'");				
                            }else{
                                $query = mysqli_query($conn,"SELECT * from tb_produk");		
                            }
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $data['id_produk'] ?></td>
                            <td><?php echo $data['nama_produk'] ?></td>
                            <td><?php echo $data['jumlah_stok'] ?></td>
                            <td><?php echo 'RP. '.$data['harga'] ?></td>
                            <td class="update">
                                <a class="btn" style="background: rgba(111, 255, 99, 0.65);"
                                    href="adm-updateProduct.php?id_produk=<?php echo $data['id_produk']; ?>"><img
                                        src="img\lucide_pencil.svg" alt=""></a>
                                <a class="btn" style="background: rgba(255, 117, 117, 0.65);"
                                    href="database/delete-produk.php?id_produk=<?php echo $data['id_produk']; ?>"><img
                                        src="img\octicon_trash-16.svg" alt=""></a>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ini untuk tabel product -->



</body>

</html>