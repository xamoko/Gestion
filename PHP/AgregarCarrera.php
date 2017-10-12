<?php
require ('conexion.php');

		$Carrera		        = $_POST['Carrera'];
		

		
		$query		=	"INSERT INTO carrera VALUES (
														
														'".$Carrera."')";
		
		$result=mysql_query($query,$conexion);
		echo mysql_error();
		if($result)
		{
			echo '<span class="green_text">La Carrera se ha registrado con exito.</span>';
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un error al intentar registrar la Carrera.</span>';
		} 

?>