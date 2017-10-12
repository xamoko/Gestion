<?php
require ('conexion.php');

		$clave				        = $_POST['clave'];
		$descripcion				= $_POST['descripcion'];
		$presentacion				= $_POST['presentacion'];
		$existencia_inicial			= $_POST['existencia_inicial'];
		$total_entradas				= $_POST['total_entradas'];
		$total_salidas		        = $_POST['total_salidas'];
		$existencia_final    		= $_POST['existencia_final'];
		
		$numero_de_anaquel			= $_POST['numero_de_anaquel'];
		$numero_de_columna			= $_POST['numero_de_columna'];
		$numero_de_fila				= $_POST['numero_de_fila'];

		

		
		$query		=	"UPDATE medicamentos set 
														descripcion='".$descripcion."',
														presentacion='".$presentacion."',
														EInicial=".$existencia_inicial.",
														TotalEntradas=".$total_entradas.",
														TotalSalidas=".$total_salidas.",
														EFinal=".$existencia_final.",
														
														NAnaquel=".$numero_de_anaquel.",
														NColumna=".$numero_de_columna.",
														NFila=".$numero_de_fila." WHERE clave = ".$clave."";


		
		$result=mysql_query($query,$conexion);
		echo mysql_error();
		if($result)
		{
			echo '<span class="green_text">El medicamento se ha actualizado con exito.</span>';
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un error al intentar registrar al medico.</span>';
		} 

?>