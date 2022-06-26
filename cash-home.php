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
    <!-- <div class="col-6">
        <div class="card shadow">
            <div class="card-header">
                <span class="py-3 font-weight-bold">Form Pembelian Buah</span>
            </div>
            <div class="card-body">
                <form id="formBeli" action="#">
                    <fieldset>
                        <div class="form-group">
                            <label for="namaBuah">Nama Buah</label>
                            <select class="form-control form-control-sm " onchange="rubahHarga()" id="namaBuah">
                                <option value="" disabled selected>...</option>
                                <option value="Apel">Apel</option>
                                <option value="Durian">Durian</option>
                                <option value="Jeruk">Jeruk</option>
                                <option value="Manggis">Manggis</option>
                                <option value="Semangka">Semangka</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jmlBuah">Jumlah</label>
                            <input class="form-control form-control-sm " id="jmlBuah" onkeyup="rubahHarga()" min="1"
                                max="100" type="number" placeholder="Kg">
                        </div>
                        <div class="form-group">
                            <label for="kualitas">Kualitas</label>
                            <select class="form-control form-control-sm " onchange="rubahHarga()" id="kualitas">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="uang">Tunai</label>
                            <input class="form-control form-control-sm " id="uang" onkeyup="rubahHarga()" type="number"
                                placeholder="Uang">
                        </div>
                        <div class="form-group">
                            <label for="hargaSatuan">Harga PerKg</label>
                            <input class="form-control form-control-sm " disabled id="hargaSatuan" type="text"
                                placeholder="Rp 0">
                        </div>
                        <div class="form-group">
                            <label for="diskon">Diskon</label>
                            <input class="form-control form-control-sm " disabled id="diskon" type="text"
                                placeholder="Rp 0">
                        </div>
                        <div class="form-group">
                            <label for="hargaTotal">Total</label>
                            <input class="form-control form-control-sm " disabled id="hargaTotal" type="text"
                                placeholder="Rp 0">
                        </div>
                        <div class="justify-content-between d-flex">
                            <input class="btn btn-sm btn-primary w-50 mr-2" onclick="beliBuah()" id="submit"
                                value="Beli">
                            <input class="btn btn-sm btn-primary w-50 ml-2" id="reset" type="reset" value="Batal">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div> -->
    <!-- akhir table beli -->
    <!-- awal tabel transaksi -->
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <span class="py-3 font-weight-bold mr-2">Riwayat Transaksi</span>
                <!-- <i id="sortBuah" class="fa fa-angle-up" aria-hidden="true"></i> -->
            </div>
            <div class="card-body">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <!-- <th>#</th> -->
                            <th>Buah</th>
                            <th>Jumlah</th>
                            <th>Kualitas</th>
                            <th>Harga</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody id="list-transaksi">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- akhir tabel transaksi -->

</body>

</html>