<?php
require('fpdf.php');

class PDF extends FPDF{

function Header(){
$this->Image('../img/3.jpg',10,10,40);
$this->Image('../img/descarga.jpg',245,15,40);
$this->SetFont('Arial','B',20);
$this->Text(105,25,'Secretaria de Salud');
//$text=$this->Write(100,'Reporte Medicamentos');
//$this->text(300,300,$text);

}
}
$pdf = new PDF();
$pdf->AddPage('L');
$pdf->SetTitle('Reporte de Medicamentos');
$pdf->SetFont('Arial','B',10);
//$pdf->Text(130,20,'Secretaria de Salud');
//$pdf->Image('../img/3.jpg',10,10,40);
//$pdf->Image('../img/descarga.jpg',245,10,40);
//$pdf->Ln(50);
//$text=$pdf->Write(100,'Reporte Medicamentos');
//$pdf->text(50,10,$text);

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("farmacia2", $conexion);
$result=mysql_query("SELECT * FROM materialesclinicos",$conexion)or die(mysql_error());
//$pdf->MultiCell(30,10,'Apellido Paterno',1,'C');
//$texto = "hola","como","";
$pdf->Ln(50);
$pdf->Cell(14,5,'Clave','B',0,'C');
$pdf->Cell(24,5,'Descripcion','B',0,'C');
$pdf->Cell(26,5,'Presentacion','B',0,'C');
$pdf->Cell(29,5,'Entrada Inicial','B',0,'C');
$pdf->Cell(26,5,'Total Entradas','B',0,'C');
$pdf->Cell(26,5,'Total Salidas','B',0,'C');
$pdf->Cell(26,5,'Entrada Final','B',0,'C');
$pdf->Cell(37,5,'Numero de Anaquel','B',0,'C');
$pdf->Cell(38,5,'Numero de Columna','B',0,'C');
$pdf->Cell(30,5,'Numero de Fila','B',0,'C');

$pdf->Cell(40,5,'',0,0,'C');
//$pdf->Line(50,60,10,60);
$pdf->Ln(10);
while($data1=mysql_fetch_array($result)){


$pdf->Cell(14,5,$data1['clave'],0,0,'C');
$pdf->Cell(24,5,$data1['descripcion'],0,0,'C');
$pdf->Cell(26,5,$data1['presentacion'],0,0,'C');
$pdf->Cell(29,5,$data1['EInicial'],0,0,'C');
$pdf->Cell(26,5,$data1['TotalEntradas'],0,0,'C');
$pdf->Cell(26,5,$data1['TotalSalidas'],0,0,'C');
$pdf->Cell(26,5,$data1['EFinal'],0,0,'C');
$pdf->Cell(37,5,$data1['NAnaquel'],0,0,'C');
$pdf->Cell(38,5,$data1['NColumna'],0,0,'C');
$pdf->Cell(30,5,$data1['NFila'],0,0,'C');

$pdf->Ln();
}
$pdf->Output();

?>