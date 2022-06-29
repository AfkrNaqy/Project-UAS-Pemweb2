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
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <?php
                        // date_default_timezone_set("Asia/Jakarta");
                        echo "Date\t".date("m-F-Y");
                    ?>
                </div>

                <div>
                    <!-- <a href="#" class="btn btn-danger">CONFIRM PAYMENT</a> -->
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">CONFIRM PAYMENT</button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            ...
                        </div>
                    </div>
                    <a href="cash-product.php" class="btn btn-primary">ADD</a>
                </div>
            </div>
            <div class="table table-hover">
                <table class="table">
                    <thead class="">
                        <tr>
                            <td scope="col">No</td>
                            <td scope="col">Nama Produk</td>
                            <td scope="col">Jumlah Produk</td>
                            <td scope="col">Harga Produk</td>
                            <td scope="col">Tindakan</td>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider" id="list-transaksi">
                        <tr>
                            <td>1</td>
                            <td>ini tes</td>
                            <td>ini tes</td>
                            <td>ini tes</td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- akhir tabel transaksi -->

</body>

</html>