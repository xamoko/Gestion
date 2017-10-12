	<?php
	session_start();
	include ('conexion.php');
	
	
	if(trim($_POST['password']) != "" && trim($_POST['usuario']) != ""   )
	{
		$password 	= $_POST['password'];
		$usuario 	= $_POST['usuario'];
		$sql 		= "SELECT accound, pass FROM docente WHERE accound ='".$usuario."';";
		$result		= @mysql_query($sql,$conexion);
		if(	$row 		= @mysql_fetch_array($result)){
		
			
			if($row['pass'] == 	$password )
			{	$_SESSION["k_username"] = $row['accound'];
				echo	'<script>
									document.location.href = "../indexadmin_docente.php";
									echo ("'.$_SESSION['k_username'].'  Has iniciado sesion");
									
						</script>';

			}
			else
			{
					echo	'<script>
									document.location.href = "javascript:history.go(-1)";
									echo ("password Incorrecta");
									
							</script>';




							

			}
		
		@mysql_free_result($result);
	}
		else
		{
		
echo	'<script>
					document.location.href = "javascript:history.go(-1)";
					echo ("Debe especificar el usuario Correcto");						
				</script>';

		
		}
	}
?>