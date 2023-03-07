<?php
require('../fpdf/fpdf.php');
include('../config.php');

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Ln(15);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Materiales',1,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,8,'idMaterial',1);
$pdf->Cell(65,8,'nombreMaterial',1);
$pdf->Cell(45,8,'stockMaterial',1);
$pdf->Cell(50,8,'stockMaterialActualizado',1);

$query="SELECT * FROM materiales";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',12);
	
	$pdf->Cell(30,8,$row['idMaterial'],1);
	$pdf->Cell(65,8,$row['nombreMaterial'],1);
	$pdf->Cell(45,8,$row['stockMaterial'],1);
	$pdf->Cell(50,8,$row['stockMaterialActualizado'],1);
}
$pdf->Output();
?>
