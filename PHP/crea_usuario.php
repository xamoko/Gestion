<?php
require ('conexion.php');

		$nombre	  = $_POST['nombre'];
		$appat	  = $_POST['appat'];
		$apmat	  = $_POST['apmat'];
		$accound  = $_POST['accound'];
		$pass	  = $_POST['pass'];
		

		
		$query		=	"INSERT INTO usuario VALUES (
														'".$nombre."',
														'".$appat."',
														'".$apmat."',
														'".$accound."',
														'".$pass."')";
		
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