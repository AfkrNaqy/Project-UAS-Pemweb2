<?php
//integrasi koneksi
include 'connect.php';

//cek koneksi
if (!$conn) {
	die("Connection failed : ".mysql_connect_error());
}

//input data ke tabel kasus
$sql = "INSERT INTO tb_penjualan (kode_transaksi,id_produk,jumlah,total_harga,tgl_penjualan) VALUES
('1','1','3','40000','2022-06-28'),
('2','2','4','40000','2022-06-28'),
('3','3','5','40000','2022-06-28'),
('4','2','6','40000','2022-06-28'),
('5','3','2','40000','2022-06-28'),
('6','2','3','40000','2022-06-28'),
('7','4','4','40000','2022-06-28'),
('8','4','7','40000','2022-06-28'),
('9','4','2','40000','2022-06-28'),
('10','3','4','40000','2022-06-28'),
('11','2','5','40000','2022-06-28'),
('12','1','6','40000','2022-06-28')
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