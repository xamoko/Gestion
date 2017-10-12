<?php
//require('../html/SistemasComputacionales/AgregarMateriaSistemasComputacionales.php');
mysql_connect("localhost","root","");
mysql_select_db("xamoko") or die(mysql_error());


		$PlanDeEstudios				        = $_POST['PlanDeEstudios'];
		$NombreDeLaMateria				= $_POST['NombreDeLaMateria'];
		$Clave				= $_POST['Clave'];
		$HorasdeMateria			= $_POST['HorasdeMateria'];
		$Carrera				= $_POST['Carrera'];
		$Creditos		        = $_POST['Creditos'];
		
		//$imagen =$_POST['imagen'];
if (@$_FILES["imagen"]["error"] > 0) {
	echo "Ha ocurrido un error";
} else {
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png","application/pdf");
	$limite_kb=1024;	

if(in_array(@$_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		$ruta = "../imagenes/".$_FILES['imagen']['name'];

		if(!file_exists($ruta)){
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado<=1){
				$nombre = $_FILES['imagen']['name'];
				@mysql_query("INSERT INTO AgregarMateria VALUES (
														'".$PlanDeEstudios."',
														'".$NombreDeLaMateria."',
														'".$Clave."',
														'".$HorasdeMateria."',
														'".$Carrera."',
														'".$Creditos."',
														'$nombre')");
			//@mysql_query("INSERT INTO AgregarMateria(imagen) VALUES ('$nombre')");											
				echo '<span class="green_text">Los datos ha sido cargados con exito puede <a href="../html/SistemasComputacionales/IngSistemasComputacionales.php">regresar</a> o quedarse para continuar agregando materias</span>';
			}else{
				echo '<span class="red_text">Ocurrio un error al mover el plan de estudios.</span>';		
				echo "hola";
			}
		}else{
			echo '<span class="red_text"> '.$_FILES['imagen']['name'].'Este archivo existe.</span>';
		}
			
	}else{
		echo "<span class='red_text'>El plan de estudios, es tipo de archivo prohibido o excede el tamaño de $limite_kb Kb</span>";
	}
}
	/*	
		$query		=	"INSERT INTO AgregarMateria VALUES (
														'".$PlanDeEstudios."',
														'".$NombreDeLaMateria."',
														'".$Clave."',
														'".$HorasdeMateria."',
														'".$Carrera."',
														'".$Creditos."',
														'".$imagen."')";



		
		$result=mysql_query($query,$conexion);
		echo mysql_error();
		if($result)
		{
			echo '<span class="green_text">La Materia se ha registrado con exito.</span>';
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un error al intentar registrar la Materia.</span>';
		} */

?>