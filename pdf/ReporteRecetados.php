<?php
require('fpdf.php');

class PDF extends FPDF{

function Header(){
$this->Image('../img/3.jpg',10,10,80,30);
$this->Image('../img/descarga.jpg',225,15,60,20);
$this->SetFont('Arial','B',20);
$this->Text(120,30,'Secretaria de Salud');


}
}
$pdf = new PDF();
$pdf->AddPage('L');
$pdf->SetTitle('Reporte de Medicamentos');
$pdf->SetFont('Arial','B',8);

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("farmacia2", $conexion);
$result=mysql_query("SELECT * FROM recetados",$conexion)or die(mysql_error());

$pdf->Ln(50);
$pdf->Cell(24,5,'No Consecutivo',1,0,'C');
$pdf->Cell(18,5,'Fecha',1,0,'C');
$pdf->Cell(18,5,'No de Fuce',1,0,'C');
$pdf->Cell(20,5,'No de Poliza',1,0,'C');
$pdf->Cell(35,5,'Nombre Paciente',1,0,'C');
$pdf->Cell(22,5,'Procedencia',1,0,'C');
$pdf->Cell(35,5,'Medico',1,0,'C');
$pdf->Cell(30,5,'Diagnostico',1,0,'C');
$pdf->Cell(26,5,'Clv Medicamento',1,0,'C');
$pdf->Cell(26,5,'U Preescritas',1,0,'C');
$pdf->Cell(26,5,'U Surtidas',1,0,'C');

$pdf->Cell(40,5,'',0,0,'C');

//$pdf->Ln(10);
while($data1=mysql_fetch_array($result)){


$pdf->Cell(24,5,$data1['No_Consecutivo'],1,0,'C');
$pdf->Cell(18,5,$data1['Fecha'],1,0,'C');
$pdf->Cell(18,5,$data1['No_Fuce'],1,0,'C');
$pdf->Cell(20,5,$data1['No_Poliza'],1,0,'C');
$pdf->Cell(35,5,$data1['Nombre_Paciente'],1,0,'C');
$pdf->Cell(22,5,$data1['Procedencia'],1,0,'C');
$pdf->Cell(35,5,$data1['Medico_preescribe'],1,0,'C');
$pdf->Cell(30,5,$data1['Diagnostico'],1,0,'C');
$pdf->Cell(26,5,$data1['Clave_medicamento'],1,0,'C');
$pdf->Cell(26,5,$data1['Unidades_Preescritas'],1,0,'C');
$pdf->Cell(26,5,$data1['Unidades_Surtidas'],1,0,'C');
//$pdf->Cell(26,5,$data1['TotalSalidas'],0,0,'C');
//$pdf->Cell(26,5,$data1['EFinal'],0,0,'C');
//$pdf->Cell(37,5,$data1['NAnaquel'],0,0,'C');
//$pdf->Cell(38,5,$data1['NColumna'],0,0,'C');
//$pdf->Cell(30,5,$data1['NFila'],0,0,'C');

$pdf->Ln();
}
$pdf->Output();

?>