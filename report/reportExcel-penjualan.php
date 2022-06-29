<?php
include('../database/connect.php');
require '../assets/exportexcel/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet ->getActiveSheet();
$sheet->setCellValue('A1', 'ID Penjualan');
$sheet->setCellValue('B1', 'Kode Transaksi');
$sheet->setCellValue('C1', 'Nama Produk');
$sheet->setCellValue('D1', 'Jumlah');
$sheet->setCellValue('E1', 'Harga');
$sheet->setCellValue('F1', 'Total Harga');
$sheet->setCellValue('G1', 'tgl_penjualan');

$query = mysqli_query($conn, "select * from tb_penjualan");
$i = 2;
while ($row = mysqli_fetch_array($query)) {
    $id_penjualan= $row['id_penjualan'];
	$kode_transaksi =$row['kode_transaksi'];
    $jumlah = $row['jumlah'];
	$total_harga =$row['total_harga'];
	$tgl_penjualan =$row['tgl_penjualan'];
    $sql = mysqli_query($conn, "SELECT nama_produk, harga FROM tb_produk WHERE id_produk='".$row['id_produk']."'");
    $row = $sql->fetch_array();
	$nama_produk = $row['nama_produk'];
	$harga = $row['harga'];

	$sheet->setCellValue('A'.$i, $id_penjualan);
	$sheet->setCellValue('B'.$i, $kode_transaksi);
	$sheet->setCellValue('C'.$i, $nama_produk);
	$sheet->setCellValue('D'.$i, $jumlah);
	$sheet->setCellValue('E'.$i, $harga);
	$sheet->setCellValue('F'.$i, $total_harga);
	$sheet->setCellValue('G'.$i, $tgl_penjualan);
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
	$i = $i - 1;
	$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);

	$writer = new xlsx($spreadsheet);
	$writer->save('Report Data Penjualan.xlsx');

header("location: ../adm-Home.php");
exit();
?>