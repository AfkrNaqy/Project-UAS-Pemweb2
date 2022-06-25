<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- ini untuk navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Report
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Product</a></li>
                            <li><a class="dropdown-item" href="#">Payment</a></li>
                            <li><a class="dropdown-item" href="#">Print</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"><img src="img\person_account.svg" alt="">

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ini untuk tombol search dll -->
    <div class="act"></div>
    <!-- ini untuk tabel product -->
    <div class="table table-hover">
        <h2>Produk</h2>
        <table class="table">
            <thead>
                <tr>
                    <td scope="col">ID</td>
                    <td scope="col">Nama Produk</td>
                    <td scope="col">Jumlah Produk</td>
                    <td scope="col">Harga Produk</td>
                </tr>
            </thead>
            <tbody>
            <?php
            include "database/connect.php";

            $query = mysqli_query($conn, 'SELECT * FROM tb_produk');
            while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $data['id_produk'] ?></td>
                <td><?php echo $data['nama_produk'] ?></td>
                <td><?php echo $data['jumlah_stok'] ?></td>
                <td><?php echo 'RP. '.$data['harga'] ?></td>
                <td class="update"><a href="update.php?id_produk=<?php echo $data['id_produk']; ?>">Update |</a>
                    <a href="deleteAct.php?id_produk=<?php echo $data['id_produk']; ?>">| Hapus</a>
                </td>
            </tr>
            <?php 
        }
        ?>
        </tbody>
        </table>
    </div>
</body>

</html>