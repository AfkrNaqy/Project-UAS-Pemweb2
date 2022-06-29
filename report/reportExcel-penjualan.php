<?php
include('database/koneksi.php');
require 'assets/exportexcel/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet ->getActiveSheet();
$sheet->setCellValue('A1', 'ID Penjualan');
$sheet->setCellValue('B1', 'Nama Produk');
$sheet->setCellValue('C1', 'Jumlah');
$sheet->setCellValue('D1', 'Harga');
$sheet->setCellValue('E1', 'tgl_penjualan');

$query = mysqli_query($conn, "select * from tb_penjualan");
$i = 2;
while ($row = mysqli_fetch_array($query)) {
    $id_penjualan= $row['id_penjualan'];
    $jumlah = $row['jumlah'];
	$tgl_penjualan =$row['tgl_penjualan'];
    $sql = mysqli_query($conn, "SELECT nama_produk, harga FROM tb_produk WHERE id_produk='".$row['id_produk']."'");
    $row = $sql->fetch_array();
	$nama_produk = $row['nama_produk']
	$harga = $row['harga']

	$sheet->setCellValue('A'.$i, $id_penjualan);
	$sheet->setCellValue('B'.$i, $nama_produk);
	$sheet->setCellValue('C'.$i, $jumlah);
	$sheet->setCellValue('D'.$i, $harga);
	$sheet->setCellValue('E'.$i, $tgl_penjualan);
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

?>