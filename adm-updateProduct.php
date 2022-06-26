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
    <?php include "adm-navigation.php" ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header text-center bg-primary">UPDATE PRODUK</div>
                <div class="card-body">
                    <!-- pembuatan form yang digunakan untuk memasukkan data -->
                    <form action="database/update-produk.php" method="POST">
                    
                        <?php
                            $id_produk = $_GET['id_produk'];
                            include "database/connect.php";     
                            $query = mysqli_query($conn, "SELECT * FROM tb_produk where id_produk = $id_produk");
                            while ($data = mysqli_fetch_array($query)) {
                        ?>

                            <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">

                            <!-- === NAMA PRODUK === -->
                            <div class="form-group row mb-3">
                                <label for="nama_produk" class="col-sm-3 col-form-label">Nama Produk</label>
                                <div class="col-sm-9"><input required type="text" name="nama_produk" class="form-control"
                                        id="nama_produk"  value="<?php echo $data['nama_produk']; ?>" /> <span class="warning"></span>
                                </div>
                            </div>
                            
                            <!-- === JUMLAH STOK -->
                            <div class="form-group row mb-3">
                                <label for="jumlah_stok" class="col-sm-3 col-form-label">Jumlah Stok</label>
                                <div class="col-sm-9"><input required type="text" name="jumlah_stok" class="form-control"
                                        id="jumlah_stok" value="<?php echo $data['jumlah_stok']; ?>" /> <span class="warning"></span>
                                </div>
                            </div>

                            <!-- === HARGA -->
                            <div class="form-group row mb-3">
                                <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-9"><input required type="text" name="harga" class="form-control"
                                        id="harga" value="<?php echo $data['harga']; ?>" /> <span class="warning"></span></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <!-- tombol submit untuk melakukan perintah selanjutnya yaitu dialihkan
                                    ke file php untuk memasukkan data ke dalam database -->
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>