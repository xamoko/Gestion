<?php  
require('conexion.php');
//require 'ListadoDeMaterias.php';

//session_start();

//$Materias = $_POST['Materias'];                                    
$seleccion = $_POST['seleccion'];
$PlanDeEstudios  = $_POST['PlanDeEstudios'];
$NombreDeLaMateria = $_POST['NombreDeLaMateria'];
$clave = $_POST['Clave'];
$HorasDeMateria = $_POST['HorasDeMateria'];
$Carrera = $_POST['Carrera'];
$Creditos = $_POST['Creditos'];
$TextArea = $_POST['TextArea'];

$query3 = "SELECT count(clave) from AgregarMateria";
$result3=mysql_query($query3,$conexion);
$row3 = mysql_fetch_array($result3);


//for($i=0; $i<$row3[0]; $i++){
	for($i=0; $i<count($seleccion); $i++){
	if($seleccion[$i] == "Si"){

		$query = "INSERT INTO solicitantes values ('".$seleccion[$i]."',
										  '".$PlanDeEstudios[$i]."',
										  '".$NombreDeLaMateria[$i]."',
										  '".$clave[$i]."',
										  '".$HorasDeMateria[$i]."',
										  '".$Carrera[$i]."',
										  '".$Creditos[$i]."',
										  '".$TextArea[$i]."',
										  '".$_SESSION['k_username']."')";


 
 		$result=mysql_query($query,$conexion);
        	echo mysql_error();
        	echo "se agrego con exito";
			echo $result,$query,$row3[0];
			echo $seleccion[$i];
 	
 }else {
 	echo "La Solicitud No Fue Generada Seleccione Al Menos Una Materia.";

 	 }
 }	

?>