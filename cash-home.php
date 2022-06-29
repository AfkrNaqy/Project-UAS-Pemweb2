<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
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
    <?php include "cash-navigation.php"; ?>

    <!-- awal tabel transaksi -->
    <div class="row justify-content-center">

        <div class="col-sm-11">
            <!-- ini button sama tanggal -->
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <?php
                        // date_default_timezone_set("Asia/Jakarta");
                        echo "Date\t".date("m-F-Y");
                    ?>
                </div>

                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">CONFIRM PAYMENT</button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">CONFIRM PAYMENT
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <td scope="col">Nama Produk</td>
                                        <td scope="col">Jumlah</td>
                                        <td scope="col">Total Harga</td>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider" id="list-transaksi">
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
                                        <td><?php echo $nama_produk ?></td>
                                        <td><?php echo $jumlah ?></td>
                                        <td><?php echo 'RP. '.$total_harga ?></td>
                                    </tr>
                                    <?php }?>
                                    <tr>
                                        <td colspan="2">TOTAL</td>
                                        <td>
                                            <?php
                                                $query = mysqli_query($conn,"SELECT SUM(total_harga) AS total_bayar FROM tb_temporary");
                                                $data = $query->fetch_array();
                                                echo 'RP. '.$data['total_bayar'];
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="input-group mb-3">
                                <span class="input-group-text">RP</span>
                                <input type="text" class="form-control" placeholder=""
                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <a class="btn btn-outline-secondary" type="button" id="button-addon1"
                                    href="database/input-penjualan.php">PAY</a>
                            </div>

                        </div>
                    </div>
                    <a href="cash-product.php" class="btn btn-primary">
                        <img src="img\icon-add.svg" alt="">
                        ADD
                    </a>
                </div>
            </div>
            <!-- ini akhir button sama tanggal -->
            <!-- ini buat tabel -->
            <div class="table table-hover">
                <table class="table table-striped table-hover">
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
                    <tbody class="table-group-divider">
                        <?php
                            include "database/connect.php";

                            $no=1;
                            $query = mysqli_query($conn, 'SELECT * FROM tb_temporary');
                            while ($data = mysqli_fetch_array($query)) {
                                $id_temp = $data['id_temp'];
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
                                <a class="btn" href="database\delete-temporary.php?id_temp=<?php echo $id_temp; ?>"><img
                                        src="img\octicon_trash-16.svg" alt="">
                                </a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- ini akhir tabel -->
        </div>


        <!-- akhir tabel transaksi -->
    </div>

</body>

</html>