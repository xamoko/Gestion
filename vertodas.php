<?php
require 'imagen.html';
mysql_connect("localhost","root","");
mysql_select_db("xamoko") or die(mysql_error());

//$id = $_GET['imagen'];

$consulta = "SELECT * FROM imagenes";

$resultado = mysql_query($consulta) or die (mysql_error());

while ($datos = mysql_fetch_assoc($resultado)) {
	$ruta = "imagenes/".$datos['imagen'];
	echo "<a href=verseleccionada.php?imagen=".$datos['imagen']."&id=".$datos['imagen_id']."><img src='$ruta' widht='80px' height='80px'/></a>";
}
?>