<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "cash-navigation.php" ?>

    <!-- awal tabel transaksi -->
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
            include "database/temp-produk.php";

            // $query = mysqli_query($conn, 'SELECT * FROM tb_produk');
            for ($i=0; $i < count($produk); $i++) { 
                # code...
                ?>
                <tr>
                    <td><?php echo $produk[$i] ?></td>
                    <td><?php echo $jumlah[$i] ?></td>
                    <td><?php echo 'RP. '.$harga[$i] ?></td>
                    <td class="add">
                        <a class="btn btn-primary"
                            href="update-product.php?id_produk=<?php echo $data['id_produk']; ?>"><img
                                src="img\lucide_pencil.svg" alt=""></a>

                    </td>
                </tr>
                <?php 
            }
        ?>
            </tbody>
        </table>
    </div>
    <!-- akhir tabel transaksi -->

</body>

</html>