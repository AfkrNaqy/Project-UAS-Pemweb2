<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/script.js" type="text/javascript">
</head>

<body>
    <!-- ini import navbar -->
    <?php include "cash-navigation.php" ?>
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
                    <td scope="col">No</td>
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
                    <td id="id_produk"><?php echo $data['id_produk'] ?></td>
                    <td id="namaProduk"><?php echo $data['nama_produk'] ?></td>

                    <form action="database/input-temporary.php" method="POST">
                    <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">
                    <input type="hidden" name="harga" value="<?php echo $data['harga']; ?>">
                    <td class="inputJml" id="jmlBeli">
                        <span><input type="number" name="jumlah" id="jumlah" class="num" value="0" min="0" max="<?php echo $data['jumlah_stok'] ?>"></span>
                    </td>
                    <td id="hargaProduk"><?php echo 'RP. '.$data['harga'] ?></td>
                    <td class="add">
                    <button type="submit" class="btn btn-primary">Update</button>
                    </td>
                    </form>
                </tr>
                <?php 
        }
        ?>
            </tbody>
        </table>

    </div>

</body>

</html>