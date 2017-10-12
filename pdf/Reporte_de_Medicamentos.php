<?php
require('fpdf.php');

class PDF extends FPDF{

function Header(){
$this->Image('../img/3.jpg',10,10,50,30);
$this->Image('../img/descarga.jpg',140,20,60,20);
$this->SetFont('Arial','B',20);
$this->Text(68,30,'Secretaria de Salud');
}
}
$pdf = new PDF();
$pdf->AddPage('P');
$pdf->SetTitle('Reporte de Medicamentos');
$pdf->SetFont('Arial','B',10);


$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("farmacia2", $conexion);
$result=mysql_query("SELECT * FROM Medicamentos2",$conexion)or die(mysql_error());

$pdf->Ln(50);
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(14,5,'Clave',1,0,'C');
$pdf->Cell(24,5,'Descripcion',1,0,'C');
$pdf->Cell(26,5,'Presentacion',1,0,'C');
$pdf->Cell(29,5,'Entrada Inicial',1,0,'C');
$pdf->Cell(26,5,'Total Entradas',1,0,'C');
//$pdf->Cell(26,5,'Total Salidas','B',0,'C');
//$pdf->Cell(26,5,'Entrada Final','B',0,'C');
//$pdf->Cell(37,5,'Numero de Anaquel','B',0,'C');
//$pdf->Cell(38,5,'Numero de Columna','B',0,'C');
//$pdf->Cell(30,5,'Numero de Fila','B',0,'C');

$pdf->Cell(40,5,'',0,0,'C');

$pdf->Ln(5);
while($data1=mysql_fetch_array($result)){

$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(14,5,$data1['clave'],1,0,'C');
$pdf->Cell(24,5,$data1['descripcion'],1,0,'C');
$pdf->Cell(26,5,$data1['presentacion'],1,0,'C');
$pdf->Cell(29,5,$data1['EInicial'],1,0,'C');
$pdf->Cell(26,5,$data1['TotalEntradas'],1,0,'C');
//$pdf->Cell(26,5,$data1['TotalSalidas'],0,0,'C');
//$pdf->Cell(26,5,$data1['EFinal'],0,0,'C');
//$pdf->Cell(37,5,$data1['NAnaquel'],0,0,'C');
//$pdf->Cell(38,5,$data1['NColumna'],0,0,'C');
//$pdf->Cell(30,5,$data1['NFila'],0,0,'C');

$pdf->Ln();
}
$pdf->Output();

?>