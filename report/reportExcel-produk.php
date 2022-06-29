<?php
include('database/koneksi.php');
require 'assets/exportexcel/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet ->getActiveSheet();
$sheet->setCellValue('A1', 'ID Produk');
$sheet->setCellValue('B1', 'Nama Produk');
$sheet->setCellValue('C1', 'Harga');
$sheet->setCellValue('D1', 'Jumlah Stok');

$query = mysqli_query($conn, "select * from tb_produk");
$i = 2;
while ($row = mysqli_fetch_array($query)) {
	$sheet->setCellValue('A'.$i, $row['id_produk']);
	$sheet->setCellValue('B'.$i, $row['nama_produk']);
	$sheet->setCellValue('C'.$i, $row['harga']);
	$sheet->setCellValue('D'.$i, $row['jumlah_stok']);
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
	$writer->save('Report Data Produk.xlsx');

?>