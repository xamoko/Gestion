<?php  
//require 'php/conexionn.php';
require 'imagen.html';
mysql_connect("localhost","root","");
mysql_select_db("xamoko") or die(mysql_error());

if (@$_FILES["imagen"]["error"] > 0) {
	echo "Ha ocurrido un error";
} else {
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png","application/pdf");
	$limite_kb=1024;

	if(in_array(@$_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		$ruta = "imagenes/".$_FILES['imagen']['name'];

		if(!file_exists($ruta)){
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado<=1){
				$nombre = $_FILES['imagen']['name'];
				@mysql_query("INSERT INTO imagenes (imagen) VALUES ('$nombre')");
				echo "El archivo ha sido movido exitosamente";
			}else{
				echo "Ocurrio un error al mover el archivo";		
				echo "hola";
			}
		}else{
			echo $_FILES['imagen']['name'].", este archivo existe";
		}
	}else{
		echo "Archivo no permitido, es tipo de archivo prohibido o excede el tamaño de $limite_kb Kb";
	}
}

?>