<?php
require 'imagen.html';
mysql_connect("localhost","root","");
mysql_select_db("xamoko") or die(mysql_error());

//$id = $_GET['imagen'];

$consulta = "SELECT imagen FROM imagenes WHERE imagen_id = 1";

$resultado = mysql_query($consulta) or die (mysql_error());

$datos = mysql_fetch_assoc($resultado);

$ruta = "imagenes/".$datos['imagen'];

echo "<img src='$ruta' widht='80px' height='80px'/>";
?>