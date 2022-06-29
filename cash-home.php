<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Home</title>
</head>

<body>
    <?php include "cash-navigation.php"; ?>

    <!-- awal tabel transaksi -->
    <div class="table table-hover">
        <table class="table">
            <thead>
                <tr>
                    <td scope="col">No</td>
                    <td scope="col">Nama Produk</td>
                    <td scope="col">Jumlah</td>
                    <td scope="col">Harga Produk</td>
                    <td scope="col">Total Harga</td>
                    <td scope="col">Tindakan</td>
                </tr>
            </thead>
            <tbody id="list-transaksi">
                <?php
            include "database/connect.php";

            $no=1;
            $query = mysqli_query($conn, 'SELECT * FROM tb_temporary');
            while ($data = mysqli_fetch_array($query)) {
                $id_produk = $data['id_produk'];
                $jumlah = $data['jumlah'];
                $total_harga = $data['total_harga'];
                $sql = mysqli_query($conn, "SELECT nama_produk, harga FROM tb_produk WHERE id_produk='".$data['id_produk']."'");
                $data = $sql->fetch_array();
                $nama_produk = $data['nama_produk'];
                $harga = $data['harga'];
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $nama_produk ?></td>
                    <td><?php echo $jumlah ?></td>
                    <td><?php echo 'RP. '.$harga ?></td>
                    <td><?php echo 'RP. '.$total_harga ?></td>
                    <td class="add">
                        <a class="btn btn-primary"
                            href="update-product.php?id_produk=<?php echo $id_produk; ?>"><img
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