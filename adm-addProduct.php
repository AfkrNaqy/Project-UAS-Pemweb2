<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Product</title>
    <!-- CSS only -->
    <!-- link berfungsi untuk mengimport library dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>
<style>
.warning {
    color: #ff0000;
}
</style>

<body class="bg-warning">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header text-center bg-primary">TAMBAH PRODUK</div>
                <div class="card-body">
                    <!-- pembuatan form yang digunakan untuk memasukkan data -->
                    <form action="database/input-produk.php" method="POST">
                        <!-- === NAMA PRODUK === -->
                        <div class="form-group row mb-3">
                            <label for="nama_produk" class="col-sm-3 col-form-label">Nama Produk</label>
                            <div class="col-sm-9"><input required type="text" name="nama_produk" class="form-control"
                                    id="nama_produk" placeholder="Nama Produk" value="" /> <span class="warning"></span>
                            </div>
                        </div>

                        <!-- === HARGA -->
                        <div class="form-group row mb-3">
                            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9"><input required type="text" name="harga" class="form-control"
                                    id="harga" placeholder="Harga" value="" /> <span class="warning"></span></div>
                        </div>

                        <!-- === JUMLAH STOK -->
                        <div class="form-group row mb-3">
                            <label for="jumlah_stok" class="col-sm-3 col-form-label">Jumlah Stok</label>
                            <div class="col-sm-9"><input required type="text" name="jumlah_stok" class="form-control"
                                    id="jumlah_stok" placeholder="Jumlah Stok" value="" /> <span class="warning"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9">
                                <!-- tombol submit untuk melakukan perintah selanjutnya yaitu dialihkan
                                ke file php untuk memasukkan data ke dalam database -->
                                <button type="submit" class="btn btn-primary">Registrasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>