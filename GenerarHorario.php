<?php
require('php/conexion.php');
require 'Horarios2.php';

$lunes = $_POST['lunes'];
$select = $_POST['select'];
$dia = $_POST['dia'];


for ($s=0; $s<count($select); $s++) { 
		if ($select[$s] == "Si") {
			//$horario="INSERT INTO horario(Dia,siete) values ('".$dia[$d]."','".$lunes[$i]."',);"
		//echo $lunes[$i];
		echo $select[$s].'</br>';		
		}else{echo "nada".'</br>';}
		}	

	//}
			/*$bdDia = "INSERT INTO horario(Dia) values ('".$array[$i]."')";	

			$insertarDia=mysql_query($bdDia,$conexion);
	}
		echo mysql_error();
		echo $bdDia,$insertarDia;
		echo "Los dias se Agregaron Con exito";*/
			
		

	
//for ($t=1; $t<count($tiempo) ; $t++) { }
/*for ($s=0; $s<count($Seleccion2); $s++) { 

	if ($Seleccion2[$s] == "Si") {	
		if ($hora[$s]=='1') {
			$bdDia2 = "INSERT INTO horario(uno) values ('".$hora[$s]."')";
		}
			
		//$bdDia2 = "INSERT INTO horario(".$tiempo[$t].") values ('".$hora[$s]."')";
		
		$insertarDia2=mysql_query($bdDia2,$conexion);
		echo mysql_error();
		echo $bdDia2,$insertarDia2;
	

	}else{echo "No selecciono nada";}
}
*/
?>

