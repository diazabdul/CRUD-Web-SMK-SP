<?php
require('fpdf/fpdf.php');
require "init.php";


$data_single_id = $_GET['id_single_data'];
$data_id = $_GET['id_data'];
$current_data;
$current_table;
$current_filename;
switch ($data_id) {
    case 0:
      $current_data = $buku;
      $current_filename = "Data Buku.pdf";
      break;
    case 1:
        $current_data = $anggota;
        $current_filename = "Data Anggota.pdf";
      break;
    case 2:
        $current_data = $peminjaman;
        $current_filename = "Data Peminjaman.pdf";

      break;
    default:
      //code block
  }


$current_table = $current_data->filled;
$data = $current_data->getdataSingle($data_single_id);

// Membuat PDF dengan FPDF
$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
 
// Judul Laporan
$pdf->Cell(190, 10, 'Laporan Peminjaman', 0, 1, 'C');
 
// Memberikan spasi setelah judul
$pdf->Ln(10);
 
// Header Tabel
$pdf->SetFont('Arial', 'B', 10);
for ($x = 0; $x < count($current_table); $x++) {
    $pdf->Cell(30, 10, $current_table[$x], 1);
  }
$pdf->Ln();
 
// Isi Tabel
$pdf->SetFont('Arial', '', 10);
for ($x = 0; $x < count($current_table); $x++) {
    $pdf->Cell(30, 10, $data[$current_table[$x]], 1);
  }
$pdf->Ln();
 
// Output PDF
$pdf->Output('I', $current_filename);
?>