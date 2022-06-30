<!DOCTYPE HTML>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM - Home</title>
    <script type="text/javascript" src="chart/Chart.js"></script>

</head>

<style>
* {
    font-family: 'Josefin Sans', sans-serif;
}

.body {
    background: #e4e6c3;

}

.img {
    position: relative;
    left: 40%;
}
</style>

<body class="body">
    <!-- ini untuk navbar -->
    <?php include "adm-navigation.php" ?>
    <div class="news-1 mt-5">
        <h4 class="text-center mb-3">GRAFIK</h4>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner bg-secondary text-white bg-opacity-10">
                <div class=" carousel-item active justify-content-center">
                    <!-- <img src="img\excel.svg" class="img d-block w-25" alt=""> -->
                    <div style="width: 800px; height: 500px; position: relative; left: 20%;">
                        <canvas id="myChart1"></canvas>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bar Chart</h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <div style="width: 800px; height: 500px; position: relative; left: 20%;">
                        <canvas id="myChart2"></canvas>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pie Chart</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="width: 800px; height: 500px; position: relative; left: 20%;">
                        <canvas id="myChart3"></canvas>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Line Chart</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- ini untuk tombol search dll -->
    <div class="act"></div>
    <!-- ini untuk tabel product -->
    <div class="news-produk mt-5 pb-5">
        <div class="row justify-content-center">
            <h4 class="text-center mb-3">PRODUK</h4>
            <div class="col-sm-11">
                <div class="table table-hover">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td scope="col">Id</td>
                                <td scope="col">Nama Produk</td>
                                <td scope="col">Jumlah Produk</td>
                                <td scope="col">Harga Produk</td>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
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
                            </tr>
                            <?php 
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ini akhir berita produk -->
    <!-- ini awal berita penjualan -->
    <div class="news-produk mt-5 pb-5">
        <div class="row justify-content-center">
            <h4 class="text-center mb-3">PENJUALAN</h4>
            <div class="col-sm-11">
                <div class="table table-hover">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td scope="col">No</td>
                                <td scope="col">Tanggal</td>
                                <td scope="col">Nama Produk</td>
                                <td scope="col">Jumlah Produk</td>
                                <td scope="col">Total Penjualan</td>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            include "database/connect.php";

                            $query = mysqli_query($conn, 'SELECT DISTINCT pj.id_produk, pj.jumlah, pj.tgl_penjualan,pj.jumlah,pj.total_harga,pr.nama_produk 
                            FROM tb_penjualan pj JOIN tb_produk pr  ON(pj.id_produk = pr.id_produk)');
                            $no=1;
                            while ($data = mysqli_fetch_array($query)) {
                                $jml = mysqli_query($conn,'SELECT SUM(jumlah) as "jmlTotal" from tb_penjualan where id_produk='.$data['id_produk']);
                                $row = mysqli_fetch_array($jml);
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['tgl_penjualan'] ?></td>
                                <td><?php echo $data['nama_produk'] ?></td>
                                <td><?php echo $row['jmlTotal'] ?></td>
                                <td><?php echo $data['total_harga'] ?></td>
                            </tr>
                            <?php 
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ini akhir berita penjualan -->
</body>
<?php
//integrasi koneksi
include 'database/connect.php';

//membuat variabel penampung data tabel
$produk = mysqli_query($conn, "SELECT * FROM tb_produk");
while ($data = mysqli_fetch_array($produk)) {
	$nama_produk[] = $data['nama_produk'];
	$sql = mysqli_query($conn, "SELECT SUM(jumlah) AS jumlah FROM tb_penjualan WHERE id_produk='".$data['id_produk']."'");
	$data = $sql->fetch_array();
	$jumlah[] = $data['jumlah'];
}

$produk2 = mysqli_query($conn, "SELECT * FROM tb_produk");
while ($data = mysqli_fetch_array($produk2)) {
	$nama_produk2[] = $data['nama_produk'];
    $jml_stok[] = $data['jumlah_stok'];
    $harga[] = $data['harga'];
	
}
?>

<!-- ini awal javascript -->
<script>
// script myChart1
var ctx = document.getElementById("myChart1").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($nama_produk);?>,
        datasets: [{
            label: 'Grafik Penjualan',
            data: <?php echo json_encode($jumlah); ?>,

            backgroundColor: 'rgba(219, 71, 2, 0.3)',
            borderColor: 'rgba(143, 46, 1, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
// akhir myChart1
// awal myChart2
var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        //membuat label
        labels: <?php echo json_encode($nama_produk2);?>,
        datasets: [{
            //grafik untuk jumlah pembelian
            label: '',
            data: <?php echo json_encode($jml_stok); ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 206, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(0, 255, 254, 0.8)',
                'rgba(115, 255, 216, 0.8)',
                'rgba(210, 105, 30, 0.8)',
                'rgba(128, 0, 128, 0.8)',
                'rgba(54, 201, 94, 0.8)',
                'rgba(40, 178, 170, 0.8)',
                'rgba(207, 198, 201, 0.8)',
                'rgba(7, 163, 40, 0.8)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(0, 255, 254, 1)',
                'rgba(115, 255, 216, 1)',
                'rgba(210, 105, 30, 1)',
                'rgba(128, 0, 128, 1)',
                'rgba(54, 201, 94, 1)',
                'rgba(40, 178, 170, 1)',
                'rgba(207, 198, 201, 1)',
                'rgba(7, 163, 40, 1)'
            ],
        }],
    },
    options: {
        scales: {

        }
    }
});
// akhir myChart2
// awal myChart3
var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
    //memilih tipe chart
    type: 'line',
    data: {
        labels: <?php echo json_encode($nama_produk);?>,
        datasets: [{
            label: 'Grafik Penjualan',
            data: <?php echo json_encode($jumlah); ?>,
            backgroundColor: 'rgba(219, 71, 2, 0.3)',
            borderColor: 'rgba(143, 46, 1, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
// akhir myChart3
</script>

</html>