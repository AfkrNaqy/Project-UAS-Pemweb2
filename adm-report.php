<html lang="en">
<!-- ini untuk import font google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM - Report</title>
    <script type="text/javascript" src="chart/Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

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
    <?php session_start(); ?>
    <!-- ini navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid mx-2">
            <a class="navbar-brand ms-2" href="#"><img src="img\logo.png" alt="" width=55px height=45px></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="adm-home.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="adm-manageUser.php">User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="adm-product.php">Product</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="adm-report.php" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Report
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#Product">Product</a></li>
                            <li><a class="dropdown-item" href="#Sales">Sales</a></li>
                            <li><a class="dropdown-item" href="#Print">Print</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropstart btn-group">
                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img
                                src="img/person_account.svg" alt="" /> </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
                            aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-item-text">
                                <h5>Admin</h5>
                                <p> <?php echo $_SESSION['username']; ?> </p>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ini akhir navbar -->
    <!-- ini awal section product -->
    <section class="Product mt-5" id="Product">
        <h4 class="text-center mb-3">PRODUCT</h4>
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
                <div class="carousel-item active justify-content-center">
                    <div style="width: 800px; height: 500px; position: relative; left: 20%;">
                        <canvas id="produk-myChart1"></canvas>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bar Chart</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="width: 800px; height: 500px; position: relative; left: 20%;">
                        <canvas id="produk-myChart2"></canvas>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pie Chart</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="width: 800px; height: 500px; position: relative; left: 20%;">
                        <canvas id="produk-myChart3"></canvas>
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
    </section>
    <!-- ini akhir section product -->
    <section class="Sales mt-5 pt-4" id="Sales">
        <h4 class="text-center">SALES</h4>
        <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner bg-secondary text-white bg-opacity-10">
                <div class="carousel-item active justify-content-center">
                    <div style="width: 800px; height: 500px; position: relative; left: 20%;">
                        <canvas id="sales-myChart1"></canvas>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bar Chart</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="width: 800px; height: 500px; position: relative; left: 20%;">
                        <canvas id="sales-myChart2"></canvas>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pie Chart</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div style="width: 800px; height: 500px; position: relative; left: 20%;">
                        <canvas id="sales-myChart3"></canvas>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Line Chart</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <section class="Print my-5 " id="Print">
        <div class="row justify-content-center">
            <h4 class="text-center">PRINT</h4>
            <div class="col-sm-3 d-flex">
                <a href="report\reportExcel-penjualan.php" class="btn mt-3" role="button"><img class="mb-3"
                        src="img\excel.svg" alt="">PENJUALAN TO EXCEL</a>
                <a href="report\reportExcel-produk.php" class="btn mt-3" role="button"><img class="mb-3"
                        src="img\excel.svg" alt="">
                    PRODUK TO EXCEL</a>
            </div>
        </div>
    </section>

</body>

<!-- ini awal section product -->
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

//membuat variabel penampung data tabel ->section produk
$produk2 = mysqli_query($conn, "SELECT * FROM tb_produk");
while ($data = mysqli_fetch_array($produk2)) {
	$nama_produk2[] = $data['nama_produk'];
    $jml_stok[] = $data['jumlah_stok'];
    $harga[] = $data['harga'];
	// $sql = mysqli_query($conn, "SELECT SUM(jumlah) AS jumlah FROM tb_penjualan WHERE id_produk='".$data['id_produk']."'");
	// $data = $sql->fetch_array();
	// $jumlah[] = $data['jumlah'];
}
?>

<!-- ini awal javascript -->
<script>
// AWAL SECTION SALES =====>>>>>
// script myChart1
var ctx = document.getElementById("sales-myChart1").getContext('2d');
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
var ctx = document.getElementById("sales-myChart2").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        //membuat label
        labels: <?php echo json_encode($nama_produk);?>,
        datasets: [{
            //grafik untuk jumlah pembelian
            label: '',
            data: <?php echo json_encode($jumlah); ?>,
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
var ctx = document.getElementById("sales-myChart3").getContext('2d');
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
// <!-- ini akhir section SALES -->
// AWAL SECTION PRODUCT =====>>>>>
var ctx = document.getElementById("produk-myChart1").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($nama_produk2);?>,
        datasets: [{
            label: 'Grafik Produk',
            data: <?php echo json_encode($jml_stok); ?>,

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
var ctx = document.getElementById("produk-myChart2").getContext('2d');
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
var ctx = document.getElementById("produk-myChart3").getContext('2d');
var myChart = new Chart(ctx, {
    //memilih tipe chart
    type: 'line',
    data: {
        labels: <?php echo json_encode($nama_produk2);?>,
        datasets: [{
            label: 'Grafik Produk',
            data: <?php echo json_encode($jml_stok); ?>,
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
// AKHIR SECTION SALES =====>>>>>
</script>

</html>