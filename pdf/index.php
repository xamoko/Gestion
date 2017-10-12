<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Text(76,20,'Secretaria de Salud');
$pdf->Image('../img/3.jpg',10,10,40);
$pdf->Image('../img/descarga.jpg',150,10,40);
$pdf->Ln(50);
//$pdf->Cell(40,10,'¡Hola, Mundo!');*/
class PDF extends FPDF{}
$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("farmacia2", $conexion);
$result=mysql_query("SELECT * FROM usuario",$conexion)or die(mysql_error());
$pdf->Ln();
$pdf->Cell(35,5,'Nombre',1,0,'C');
$pdf->Cell(35,5,'Apellido Paterno',1,0,'C');
$pdf->Cell(35,5,'Apellido Materno',1,0,'C');
$pdf->Cell(35,5,'Cuenta',1,0,'C');
$pdf->Cell(35,5,'Password',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
while($data1=mysql_fetch_array($result)){
/*$data[] = $data1;

$titles=array('nombre'=>'Nomb');
$options = array('showHeadings'=>1,'shadeCol'=>array(0.9,0.9,0.9), 'xOrientation'=>'center','width'=>500);*/

/*$pdf = new PDF();
/*$title="Nombres "."\n\n\n";
$pdf->SetTitle($title,12);
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);*/

$pdf->Cell(35,5,$data1['nombre'],1,0,'C');
$pdf->Cell(35,5,$data1['appat'],1,0,'C');
$pdf->Cell(35,5,$data1['apmat'],1,0,'C');
$pdf->Cell(35,5,$data1['accound'],1,0,'C');
$pdf->Cell(35,5,$data1['pass'],1,0,'C');
$pdf->Ln();
}
$pdf->Output();

?>