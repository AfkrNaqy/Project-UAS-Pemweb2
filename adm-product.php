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
    <!-- ini import navbar -->
    <?php include "adm-navigation.php" ?>
    <!-- ini untuk tombol search dll -->
    <div class="act"></div>
    <!-- ini untuk searach dan button tambah -->
    <div class="row">
        <h2>Produk</h2>
        <div class="col-3 bg-danger">
            <a href="">ini class row</a>
        </div>
    </div>

    <!-- ini untuk tabel product -->
    <div class="table table-hover">
        <table class="table">
            <thead>
                <tr>
                    <td scope="col">ID</td>
                    <td scope="col">Nama Produk</td>
                    <td scope="col">Jumlah Produk</td>
                    <td scope="col">Harga Produk</td>
                    <td scope="col">Tindakan</td>
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
                    <td class="update">
                        <a class="btn btn-primary"
                            href="update-product.php?id_produk=<?php echo $data['id_produk']; ?>"><img
                                src="img\lucide_pencil.svg" alt=""></a>
                        <a class="btn btn-primary"
                            href="delete-produk.php?id_produk=<?php echo $data['id_produk']; ?>"><img
                                src="img\octicon_trash-16.svg" alt=""></a>
                    </td>
                </tr>
                <?php 
        }
        ?>
            </tbody>
        </table>
    </div>

    <a href="adm-addProduct.php" class="btn btn-primary">Tambah Data</a>
</body>

</html>