<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ini import navbar -->
    <?php include "adm-navigation.php" ?>
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