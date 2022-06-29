<?php
//integrasi koneksi
include '../database/connect.php';
include '../adm-navigation.php';
//membuat variabel penampung data tabel
$produk = mysqli_query($conn, "SELECT * FROM tb_produk");
while ($data = mysqli_fetch_array($produk)) {
	$nama_produk[] = $data['nama_produk'];
	$harga[] = $data['harga'];
	$sql = mysqli_query($conn, "SELECT SUM(jumlah) AS jumlah FROM tb_penjualan WHERE id_produk='".$data['id_produk']."'");
	$data = $sql->fetch_array();
	$jumlah[] = $data['jumlah'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menggunakan Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ed8937;">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="laporan.php">
    		<img src="img/logo-navbar.png"
    		height="48">
    		</a>
		</div>
	</nav><br>
	<!--pengaturan tampilan bar dan pembuatan id chart-->
	<div style="width: 800px; height: 800px; position: relative; left: 20%;">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart (ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($nama_produk);?>, datasets: [{
					labels: 'Grafik Penjualan',
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
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>