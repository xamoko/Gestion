<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <title></title>
            <!--ESTILO-->
            <link rel="stylesheet" type="text/css" href="../../css/desktop.css">
            <link rel="stylesheet" href="../../css/validationEngine.jquery.css" type="text/css"/>
			<script type="text/javascript" src="../../js/jquery-1.5.js"></script>
			<script src="../../js/jquery.validationEngine-es.js" type="text/javascript"></script>
			<script src="../../js/jquery.validationEngine.js" type="text/javascript"></script>
			<script language="javascript">jQuery(document).ready(function(){jQuery("#AgregarMateria").validationEngine();});</script>
			<script src="../../validaciones/ValidarAgregarMateriaISC.js" type="text/javascript"></script>
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
            <a href="IngSistemasComputacionales.php"><li>Inicio</li></a>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            <a href="../../logout.php"><li>Salir</li></a>
            <li><?php
                                    session_start();
                                    echo 'Bienvenido: ';
                                    if (isset($_SESSION['k_username'])) {
                                    echo '<b>'.$_SESSION['k_username'].'</b>.';
                                    echo '';
                                    }else{
                                    echo '<script language="JavaScript" type="text/javascript">
                                    var pagina="login.php"
                                    function redireccionar() 
                                    {
                                    location.href=pagina
                                    } 
                                    setTimeout ("redireccionar()", 10);
                                                            
                                    </script>';
                                    }
                ?> 
            </li>
        </ul>
    </section>
</nav>

            <section id="separador"><br></section>

            <header>
                    <section id="imagenes">
                            <img src="../../img/header2161.jpg">
                                
                    </section>
            </header>
				
				<section>
           					 
				</section>
	</header>
  

  <body>

	<section id="registro"class="main">
		<!-- <form name="AgregarMateria" id="AgregarMateria" method="POST" onblur="limpia()"  action="../../AgregarMateriaSistemasComputacionales.php"> -->

        <form name="AgregarMateria" id="AgregarMateria" method="POST"  action="AgregarMateriaSistemasComputacionales.php" enctype="multipart/form-data">

		 <table class="tb1">
                                        <caption>Agregar Materia</caption>

                            <tr>
                                <td class="t3">Plan de Estudios</td>
                                <td><input type="text" name="PlanDeEstudios" id="PlanDeEstudios" placeholder="Plan de Estudios" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Nombre de la Materia</td>
                                <td><input type="text" name="NombreDeLaMateria" id="NombreDeLaMateria" placeholder="Nombre de la Materia" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Clave</td>
                                <td><input type="text" name="Clave" id="Clave" placeholder="Clave" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Horas de Materia</td>
                                <td><input type="text" name="HorasdeMateria" id="HorasdeMateria" placeholder="Horas de Materia" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Carrera</td>
                                <td><input type="text" name="Carrera" id="Carrera" placeholder="Carrera" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Creditos</td>
                                <td><input type="text" name="Creditos" id="Creditos" placeholder="Creditos" ></td>
                            </tr>
                            <tr>
                                <td class="t3">Plan de Estudios (Archivo)</td>
                                <td><input type="file" name="imagen" id="imagen" class="validate[required]"></td>
                            </tr>
                            
                            
                            
                             <tr><td></td>
				        		<!-- <td class="t3"><input type="button" value="Registrar" onClick="validarMateriaISC()" class="button"></td> -->
                                <td class="t3"><input type="submit" name ='subir' value="Registrar" class="button"></td>
				    		</tr>   
                        </table>

                    <?php
                    if ($_POST) {
                        
                    
//require('../html/SistemasComputacionales/AgregarMateriaSistemasComputacionales.php');
mysql_connect("localhost","root","");
mysql_select_db("xamoko") or die(mysql_error());


        $PlanDeEstudios                     = $_POST['PlanDeEstudios'];
        $NombreDeLaMateria              = $_POST['NombreDeLaMateria'];
        $Clave              = $_POST['Clave'];
        $HorasdeMateria         = $_POST['HorasdeMateria'];
        $Carrera                = $_POST['Carrera'];
        $Creditos               = $_POST['Creditos'];
        
        //$imagen =$_POST['imagen'];
if (@$_FILES["imagen"]["error"] > 0) {
    echo "Ha ocurrido un error";
} else {
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png","application/pdf");
    $limite_kb=1024;    

if(in_array(@$_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta = "../../imagenes/".$_FILES['imagen']['name'];

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
                echo '<span class="green_text">Los datos ha sido cargados con exito puede <a href="../SistemasComputacionales/IngSistemasComputacionales.php">regresar</a> o quedarse para continuar agregando materias</span>';
            }else{
                echo '<span class="red_text">Ocurrio un error al mover el plan de estudios intente de nuevo.</span>';        
                echo "hola";
            }
        }else{
            echo '<span class="red_text"> '.$_FILES['imagen']['name'].'Este archivo existe puede <a href="../SistemasComputacionales/IngSistemasComputacionales.php">regresar</a> o intentar de nuevo.</span>';
        }
            
    }else{
        echo "<span class='red_text'>El plan de estudios, es tipo de archivo prohibido o excede el tamaño de $limite_kb Kb <a href='../SistemasComputacionales/IngSistemasComputacionales.php'>regresar</a></span>";
    }
}
 }   
?>
					
					</form>
                    
 			</section>
            <div align="center" id="respuesta"></div>


<footer>
    
</footer>
</body>
</html>