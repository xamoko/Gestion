<?php
require 'php/conexion.php';
require 'untitled.php';

$Seleccion = $_POST['Seleccion'];
$Seleccion2 = $_POST['Seleccion2'];
$array = $_POST['array'];
$array2 = $_POST['array2'];
//$hora = $_POST['hora'];
/*$lunes = $_POST['Lunes'];
$martes = $_POST['Martes'];
$miercoles = $_POST['Miercoles'];
$jueves = $_POST['Jueves'];
$viernes = $_POST['Viernes'];
$sabado = $_POST['Sabado'];
$domingo = $_POST['Domingo'];
$uno = $_POST['01'];
$dos = $_POST['02'];
$tres = $_POST['03'];
$cuatro = $_POST['04'];
$cinco = $_POST['05'];
$seis = $_POST['06'];
$siete = $_POST['07'];
$ocho = $_POST['08'];
$nueve = $_POST['09'];
$diez = $_POST['10'];
$once = $_POST['11'];
$doce = $_POST['12'];
$trece = $_POST['13'];
$catorce = $_POST['14'];
$quince = $_POST['15'];
$dieciseis = $_POST['16'];
$diecisiete = $_POST['17'];
$dieciocho = $_POST['18'];
$diecinueve = $_POST['19'];
$veinte = $_POST['20'];
$veintiuno = $_POST['21'];
$veintidos = $_POST['22'];
$veintitres = $_POST['23'];
$veinticuatro = $_POST['24'];*/



for ($i=0; $i<count($Seleccion); $i++) { 
	if ($Seleccion[$i] == "Si") {
		echo $array[$i]."</br>";
		$insert = "INSERT INTO dia values ('".$array[$i]."');";
		$bd = mysql_query($insert,$conexion);
		echo mysql_error();	
		}else{
		echo "nada".'</br>';
	}					
	/*for ($a=0; $a<count($array) ; $a++) {
			if ($Seleccion[$i] == "Si") {
			echo $Seleccion[$i]."</br>";					
			echo $array[$a].'</br>';	
			
		//echo $lunes,$martes,$miercoles,$jueves,$viernes,$sabado,$domingo;
		//echo $hora[$i];
		/*$insert = "INSERT INTO horario(Dia) values ('".$a[$i]."');";
		$bd = mysql_query($insert,$conexion);
		echo mysql_error();	
	}else{
		echo "nada".'</br>';
	}
}*/
}

for ($j=0; $j<count($Seleccion2) ; $j++) { 
		if ($Seleccion2[$j] == "Si") {
			echo $array2[$j]."</br>";
		//$insert = "INSERT INTO horario values ('".$array2[0]."','".$array2[1]."','".$array2[2]."','".$array2[3]."','".$array2[4]."','".$array2[5]."','".$array2[6]."','".$array2[7]."','".$array2[8]."','".$array2[9]."','".$array2[10]."','".$array2[11]."','".$array2[12]."','".$array2[13]."','".$array2[14]."','".$array2[15]."','".$array2[16]."','".$array2[17]."','".$array2[18]."','".$array2[19]."','".$array2[20]."','".$array2[21]."','".$array2[22]."','".$array2[23]."');";
		$insert = "INSERT INTO horario values ('".$array2[$j]."','','','','','','','','','','','','','','','','','','','','','','','');";
		$bd = mysql_query($insert,$conexion);
		echo mysql_error();	
		echo $insert;
		echo $bd;
		}else{
			echo "nada2".'</br>';
		}

	}


?>