<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <title></title>
            <!--ESTILO-->
            <link rel="stylesheet" type="text/css" href="../../css/desktop.css">
            <link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css"/>
			<script type="text/javascript" src="../js/jquery-1.5.js"></script>
			<script src="../js/jquery.validationEngine-es.js" type="text/javascript"></script>
			<script src="../js/jquery.validationEngine.js" type="text/javascript"></script>
			<script language="javascript">jQuery(document).ready(function(){jQuery("#AgregarMateria").validationEngine();});</script>
			<script src="../validaciones/validarAddMedicamento.js" type="text/javascript"></script>
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
            <a href="IngSistemasComputacionales.php"><li>Inicio</li></a>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>
            <a href="../login.php"><li>Salir</li></a>
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
		<form name="AgregarMateria" id="AgregarMateria" method="post" onblur="limpia()"  >

		 <table class="tb1">
                                        <caption>Agregar Materia</caption>

                            <tr>
                                <td class="t3">Plan de Estudios</td>
                                <td><input type="text" name="clave" id="PlanDeEstudios" placeholder="Plan de Estudios" class="validate[required]"></td>
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
                                <td><input type="text" name="Creditos" id="Creditos" placeholder="Creditos" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Temario</td>
                                <td><input type="file" name="Temario" id="Temario" placeholder="Creditos" class="validate[required]"></td>
                            </tr>
                            
                             <tr><td></td>
				        		<td class="t3"><input type="button" value="Registrar" onClick="validarMedicamento()" class="button"></td>
				    		</tr>   
                        </table>
					
					</form>
 			</section>
            <div align="center" id="respuesta"></div>


<footer>
    
</footer>
</body>
</html>