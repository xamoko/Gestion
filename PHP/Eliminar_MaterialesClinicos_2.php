<?php
require ('conexion.php');

		$nombre						=$_POST['nombre'];
		$clave				        = $_POST['clave'];
		$descripcion						=$_POST['descripcion'];		
		$cantidad						=$_POST['cantidad'];
		$estado						=$_POST['estado'];
		$Fecha_de_Registro						=$_POST['fecha_de_registro'];


		

		
		$query		=	"DELETE FROM MaterialesClinicos WHERE clave = ".$clave."";


		
		$result=mysql_query($query,$conexion);
		echo mysql_error();
		if($result)
		{
			echo '<span class="green_text">El medicamento se ha Eliminado con exito.</span>';
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un error al intentar registrar al medico.</span>';
		} 

?>