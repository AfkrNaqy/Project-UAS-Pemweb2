<?php
//integrasi koneksi
include 'connect.php';

//cek koneksi
if (!$conn) {
	die("Connection failed : ".mysql_connect_error());
}

//input data ke tabel kasus
$sql = "INSERT INTO tb_produk (nama_produk,harga,jumlah_stok) VALUES
('Sandal','12000','20'),
('Sepatu','75000','20'),
('Tas','120000','20'),
('Ikat Pinggang','15000','20'),
('Kemeja','70000','20')
";

//pengecekkan
if (mysqli_query($conn, $sql)) {
	echo "Insert Data Behasil";
}
else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn); 
}
mysqli_close($conn); 
?>