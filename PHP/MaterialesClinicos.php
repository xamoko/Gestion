<?php
require ('conexion.php');

		$Nombre				        = $_POST['Nombre'];
		$clave				= $_POST['clave'];
		$descripcion				= $_POST['descripcion'];
		$Cantidad			= $_POST['Cantidad'];
		$Estado				= $_POST['Estado'];
		$Fecha_de_Registro		        = $_POST['Fecha_de_Registro'];
		
		$query		=	"INSERT INTO MaterialesClinicos VALUES (
														'".$Nombre."',
														'".$clave."',
														'".$descripcion."',
														'".$Cantidad."',
														'".$Estado."',
														'".$Fecha_de_Registro."')";
		
		$result=mysql_query($query,$conexion);
		echo mysql_error();
		if($result)
		{
			echo '<span class="green_text">El medico se ha registrado con exito.</span>';
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un error al intentar registrar al medico.</span>';
		} 

?>