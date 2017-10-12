<?php
require ('conexion.php');

		
		$PlanDeEstudios				        = $_POST['PlanDeEstudios'];
		$NombreDeLaMateria				= $_POST['NombredeLaMateria'];
		$Clave				= $_POST['clave'];
		$HorasdeMateria			= $_POST['HorasDeMateria'];
		$Carrera				= $_POST['Carrera'];
		$Creditos		        = $_POST['Creditos'];
		

		
		$query		=	"UPDATE AgregarMateria set 
														PanDeEstudios = '".$PlanDeEstudios."',
														NombreDeLaMateria = '".$NombreDeLaMateria."',
														Clave = '".$Clave."',
														HorasDeMateria = '".$HorasdeMateria."',
														Carrera = '".$Carrera."',
														Creditos = '".$Creditos."' ";

		
		$result=mysql_query($query,$conexion);
		echo mysql_error();
		if($result)
		{
			echo '<span class="green_text">La Materia se ha Actualizado con exito.</span>';
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un Error al Intentar Eliminar la Materia.</span>';
		} 

?>