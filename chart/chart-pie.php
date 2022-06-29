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
			type: 'pie',
			data: {
				//membuat label
				labels: <?php echo json_encode($nama_produk);?>,
				datasets: [{
					//grafik untuk total kasus
					label: '',
					data:<?php echo json_encode($jumlah); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(0, 255, 254, 0.2)',
					'rgba(115, 255, 216, 0.2)',
					'rgba(210, 105, 30, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(54, 201, 94, 0.2)',
					'rgba(40, 178, 170, 0.2)',
					'rgba(207, 198, 201, 0.2)',
					'rgba(7, 163, 40, 0.2)'
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
	</script>
</body>
</html>