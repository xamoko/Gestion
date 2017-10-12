<?php
require ('conexion.php');

		
		$clave                      = $_POST['clave'];

		
		$query		=	"DELETE FROM AgregarMateria WHERE Clave='".$clave."'";

		
		$result=mysql_query($query,$conexion);
		echo mysql_error();
		if($result)
		{
			echo '<span class="green_text">La Materia se ha eliminado con exito.</span>';
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un Error al Intentar Eliminar la Materia.</span>';
		} 

?>