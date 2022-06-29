<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>
<style>
* {
    font-family: 'Josefin Sans', sans-serif;
}

.warning {
    color: #ff0000;
}

.card {
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
}

.body {
    background: #e4e6c3;
}
</style>

<body class="body">
    <?php include "adm-navigation.php" ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4 rounded-4 p-2" style="background-color: #899878;">
                <div class="card-body text-light">
                    <!-- pembuatan form yang digunakan untuk memasukkan data -->
                    <form action="database/input-produk.php" method="POST">
                        <h2 class="text-center mb-4">SIGN UP</h2>
                        <!-- === NAMA PRODUK === -->
                        <div class="form-group row mb-3">
                            <label for="nama_produk" class="col-sm-3 col-form-label">Nama Produk</label>
                            <div class="col-sm-9"><input required type="text" name="nama_produk" class="form-control"
                                    id="nama_produk" placeholder="Nama Produk" value="" /> <span class="warning"></span>
                            </div>
                        </div>

                        <!-- === JUMLAH STOK -->
                        <div class="form-group row mb-3">
                            <label for="jumlah_stok" class="col-sm-3 col-form-label">Jumlah Stok</label>
                            <div class="col-sm-9"><input required type="text" name="jumlah_stok" class="form-control"
                                    id="jumlah_stok" placeholder="Jumlah Stok" value="" /> <span class="warning"></span>
                            </div>
                        </div>

                        <!-- === HARGA -->
                        <div class="form-group row mb-3">
                            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9"><input required type="text" name="harga" class="form-control"
                                    id="harga" placeholder="Harga" value="" /> <span class="warning"></span></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9">
                                <!-- tombol submit untuk melakukan perintah selanjutnya yaitu dialihkan
                                ke file php untuk memasukkan data ke dalam database -->
                                <button type="submit" class="btn btn-light p-2">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>