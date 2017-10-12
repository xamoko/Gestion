<?php
require ('conexion.php');

		$clave				        = $_POST['clave'];
		$descripcion				= $_POST['descripcion'];
		$presentacion				= $_POST['presentacion'];
		$existencia_inicial			= $_POST['existencia_inicial'];
		$total_entradas				= $_POST['total_entradas'];
		$total_salidas		        = $_POST['total_salidas'];
		$existencia_final    		= $_POST['existencia_final'];
		$fecha_de_caducidad	    	= $_POST['fecha_de_caducidad'];
		$numero_de_anaquel			= $_POST['numero_de_anaquel'];
		$numero_de_columna			= $_POST['numero_de_columna'];
		$numero_de_fila				= $_POST['numero_de_fila'];

		

		
		$query		=	"DELETE FROM medicamentos WHERE clave = ".$clave."";


		
		$result=mysql_query($query,$conexion);
		echo mysql_error();
		if($result)
		{
			echo '<span class="green_text">El medicamento se ha eliminado con exito.</span>';
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un error al intentar registrar al medico.</span>';
		} 

?>