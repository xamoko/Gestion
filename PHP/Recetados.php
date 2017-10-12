<?php
require ('conexion.php');

		$No_Consecutivo				        = $_POST['No_Consecutivo'];
		$Fecha				= $_POST['Fecha'];
		$No_Fuce				= $_POST['No_Fuce'];
		$No_Poliza			= $_POST['No_Poliza'];
		$Nombre_Paciente				= $_POST['Nombre_Paciente'];
		$Procedencia		        = $_POST['Procedencia'];
		$Medico_Preescribe    		= $_POST['Medico_Preescribe'];
		$Diagnostico	    	= $_POST['Diagnostico'];
		$Clave_Medicamento			= $_POST['Clave_Medicamento'];
		$Unidades_Preescritas			= $_POST['Unidades_Preescritas'];
		$Unidades_Surtidas				= $_POST['Unidades_Surtidas'];

		
		$query		=	"INSERT INTO recetados VALUES (
														'".$No_Consecutivo."',
														'".$Fecha."',
														'".$No_Fuce."',
														'".$No_Poliza."',
														'".$Nombre_Paciente."',
														'".$Procedencia."',
														'".$Medico_Preescribe."',
														'".$Diagnostico."',
														'".$Clave_Medicamento."',
														'".$Unidades_Preescritas."',
														'".$Unidades_Surtidas."')";
		
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