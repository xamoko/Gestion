<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <title></title>
            <!--ESTILO-->
            <link rel="stylesheet" type="text/css" href="css/desktop.css">
             <link rel="stylesheet" href="validationEngine.jquery.css" type="text/css"/>
            <script type="text/javascript" src="js/jquery-1.5.js"></script>
            <script src="js/jquery.validationEngine-es.js" type="text/javascript"></script>
            <script src="js/jquery.validationEngine.js" type="text/javascript"></script>
            <script language="javascript">jQuery(document).ready(function(){jQuery("#solicitudes").validationEngine();});</script>
            <script src="validaciones/GenerarSolicitud.js" type="text/javascript"></script>
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
                <a href="#"><li></li></a>
                <a href="indexadmin_admin2.php"><li>Menu</li></a>
                <!--<a href="../html/login_admin.php"><li>Registrarme</li></a>-->
                <a href="#"><li>Salir</li></a>
            <li>
            </li>

        </ul>
    </section>
</nav>

            <section id="separador"><br></section>

            <header>
                    <section id="imagenes">
                            <img src="  img/header2161.jpg">
                            <!--<img src="../img/itsm.png">-->
                    </section>
            </header>
<section id="loginn">
<!-- <form name="solicitudes" id="solicitudes" method="post" onblur="limpia()"  > -->
<form action="actualizaruna.php" method="POST" enctype="multipart/form-data">
  <label for="imagen">Imagen:</label>
  <input type="file" name="imagen" id="imagen"/>
  <input type="submit" name="subir" value="Subir">

  <?php
//require 'imagen.html';
mysql_connect("localhost","root","");
mysql_select_db("xamoko") or die(mysql_error());

$id = $_GET['imagen'];

$consulta = "SELECT imagen FROM imagenes where imagen='".$id."'";

$resultado = mysql_query($consulta) or die (mysql_error());
//echo '<input type="file" name="imagen" id="imagen"/><input type="submit" name="subir" value="Subir"></br>';
//while ($datos = mysql_fetch_assoc($resultado)) {
$datos = mysql_fetch_assoc($resultado);
    $ruta = "imagenes/".$datos['imagen'];
    echo "<img src='$ruta' widht='80px' height='80px'/>";
    
    

//}
if ($_POST) {
    echo $_REQUEST['imagen'];

if ($_FILES["imagen"]["error"] > 0) {
    echo "Ha ocurrido un error";
} else {
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb=1024;

    if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta = "imagenes/".$_FILES['imagen']['name'];

        //if(!file_exists($ruta)){
            $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
            if ($resultado){
                $nombre = $_FILES['imagen']['name'];
                mysql_query("UPDATE imagenes SET imagen=('$nombre') where imagen=(".$id.")");
                echo "El archivo ha sido movido exitosamente";
            }else{
                echo "Ocurrio un error al mover el archivo";        
                echo "hola";
            }
        //}else{
          //  echo $_FILES['imagen']['name'].", este archivo existe";
        //}
    }else{
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamaño de $limite_kb Kb";
    }
}
}

?>

</form>
</section>
<div align="center" id="respuesta"></div>

<a href=""></a>

  
    </body>
</html><!-- 
create table horario(Dia text,Uno text,Dos text,Tres text, Cuatro text,Cinco text,Seis text,Siete text,Ocho text,Nueve text,Diez text,Once text,Doce text,Trece text,Catorce text,Quince text,Dieciseis text,Diecisiete text,Dieciocho text,Diecinueve text,Veinte text,Veintiuno text,Veintidos text,Veintitres text,Veinticuatro text); -->