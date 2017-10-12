<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <title></title>
            <!--ESTILO-->
            <link rel="stylesheet" type="text/css" href="../css/desktop.css">
            <link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css"/>
			<script type="text/javascript" src="../js/jquery-1.5.js"></script>
			<script src="../js/jquery.validationEngine-es.js" type="text/javascript"></script>
			<script src="../js/jquery.validationEngine.js" type="text/javascript"></script>
			<script language="javascript">jQuery(document).ready(function(){jQuery("#AddRecetados").validationEngine();});</script>
			<script src="../validaciones/Recetados.js" type="text/javascript"></script>
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
            <a href="../indexadmin.php"><li>Inicio</li></a>
            <a href="#"><li></li></a>
            <a href="h#"><li></li></a>
            <a href="login.php"><li>Salir</li></a>
            <li><?php
                                    session_start();
                                    echo 'Bienvenido ';
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
                            <img src="../img/3.jpg">
                            <img src="../img/descarga.jpg">
                    </section>
            </header>
				
				<section>
           					 
				</section>
	</header>
  

  <body>

	<section id="registro"class="main">
		<form name="AddRecetados" id="AddRecetados" method="post" onblur="limpia()"  >

		 <table class="tb1">
                                        <caption>Recetas</caption>

                            <tr>
                                <td class="t3">Numero Consecutivo</td>
                                <td><input type="text" name="No_Consecutivo" id="No_Consecutivo" placeholder="Numero Consecutivo" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Fecha</td>
                                <td><input type="date" name="Fecha" id="Fecha" placeholder="Fecha" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Numero Fuce</td>
                                <td><input type="text" name="No_Fuce" id="No_Fuce" placeholder="Numero Fuce" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Numero de Poliza</td>
                                <td><input type="text" name="No_Poliza" id="No_Poliza" placeholder="Numero de Poliza" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Nombre del Paciente</td>
                                <td><input type="text" name="Nombre_Paciente" id="Nombre_Paciente" placeholder="Nombre del Paciente" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Lugar de Procedencia</td>
                                <td><input type="text" name="Procedencia" id="Procedencia" placeholder="Lugar de Procedencia" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Medico que Preescribe</td>
                                <td><input type="text" name="Medico_Preescribe" id="Medico_Preescribe" placeholder="Medico que Preescribe" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Diagnostico</td>
                                <td><input type="text" name="Diagnostico" id="Diagnostico" placeholder="Diagnostico" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Clave del Medicamento</td>
                                <td><input type="text" name="Clave_Medicamento" id="Clave_Medicamento" placeholder="Clave del Medicamento" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Clave del Medicamento(2)</td>
                                <td><input type="text" name="Clave_Medicamento(2)" id="Clave_Medicamento(2)" value="-" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Clave del Medicamento(3)</td>
                                <td><input type="text" name="Clave_Medicamento(3)" id="Clave_Medicamento(3)" value="-" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Clave del Medicamento(4)</td>
                                <td><input type="text" name="Clave_Medicamento(4)" id="Clave_Medicamento(4)" value="-" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Unidades Preescritas</td>
                                <td><input type="text" name="Unidades_Preescritas" id="Unidades_Preescritas" placeholder="Unidades Preescritas" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Unidades Surtidas</td>
                                <td><input type="text" name="Unidades_Surtidas" id="Unidades_Surtidas" placeholder="Unidades Surtidas" class="validate[required]"></td>
                            </tr>

                            
                             <tr><td></td>
				        		<td class="t3"><input type="button" value="Registrar" onClick="validarRecetados()"></td>
				    		</tr>   
                        </table>
					
					</form>
 			</section>
            <div align="center" id="respuesta"></div>


<footer>
    
</footer>
</body>
</html>