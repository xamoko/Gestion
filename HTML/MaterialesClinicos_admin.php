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
			<script language="javascript">jQuery(document).ready(function(){jQuery("#AddMedicamento").validationEngine();});</script>
			<script src="../validaciones/validarAddMaterialesClinicos.js" type="text/javascript"></script>
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
            <a href="../indexadmin.php"><li>Inicio</li></a>
            <a href="#"><li></li></a>
            <a href="#"><li></li></a>
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
		<form name="AddMedicamento" id="AddMaterialesClinicos" method="post" onblur="limpia()"  >

		 <table class="tb1">
                                        <caption>Materiales Clinicos</caption>

                            <!-- <tr>
                                <td class="t3">Nombre</td>
                                <td><input type="text" name="nombre" id="nombre" placeholder="Nombre" class="validate[required,custom[onlyLetterSp]]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Apellido Paterno</td>
                                <td><input type="text" name="appat" id="appat" placeholder="Apellido Paterno" class="validate[required,custom[onlyLetterSp]]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Apellido Materno</td>
                                <td><input type="text" name="apmat" id="apmat" placeholder="Apellido Materno" class="validate[required,custom[onlyLetterSp]]"></td>

                            </tr>
                            <tr>
                                <td class="t3">Cedula</td>
                                <td><input type="text" name="cedula" id="cedula" placeholder="Cedula" class="validate[required,custom[onlyNumberSp]]"></td>

                            </tr>
                            
                            <tr>
                                <td class="t3">Fecha de nacimiento</td>
                                <td><input type="date" id="nac" name="nac" class="validate[required]"></td> 
                            </tr>
                            <tr>
                                <td class="t3">Telefono</td>
                                <td><input type="tex" id="telefono" name="telefono" class="validate[required]"></td> 
                            </tr>

                            <tr>
                                <td class="t3">Especialidad</td>
                                <td><select id="especialidad" name="especialidad">	

                                	   	 <option value="1">Cardiologo</option>
                                	   	 <option value="2">Nutriologo</option>
                                	   	 <option value="3">Oftalmologo</option>
                                	   	 <option value="4">Medico General</option>
                                </select></td>	
                            </tr>
                            <tr>
                                <td class="t3">Domicilio</td>
                                <td><input type="text" name="domicilio" id="domicilio" placeholder="Domicilio" class="validate[required]"></td>
                            </tr>
                           
                           <tr>
                               	<td class="t3">Usuario</td>
                            	<td><input type="text" name="accound" id="accound" placeholder="Usuario" class="validate[required]"></td>
                            </tr>

                               	<td class="t3">Password</td>
                            	<td><input type="text" name="pass" id="pass" placeholder="Password" class="validate[required]"></td>
                            </tr> -->

                            <tr>
                                <td class="t3">Nombre</td>
                                <td><input type="text" name="Nombre" id="Nombre" placeholder="Nombre" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Clave</td>
                                <td><input type="text" name="clave" id="clave" placeholder="Clave" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Descripcion</td>
                                <td><input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Cantidad</td>
                                <td><input type="text" name="Cantidad" id="Cantidad" placeholder="Cantidad" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Estado</td>
                                <td><input type="text" name="Estado" id="Estado" placeholder="Estado" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Fecha de Registro</td>
                                <td><input type="date" name="Fecha_de_Registro" id="Fecha_de_Registro" placeholder="Fecha de Registro" class="validate[required]"></td>
                            </tr>
                            
                            
                             <tr><td></td>
				        		<td class="t3"><input type="button" value="Registrar" onClick="validarMaterialesClinicos()"></td>
				    		</tr>   
                        </table>
					
					</form>
 			</section>
            <div align="center" id="respuesta"></div>


<footer>
    
</footer>
</body>
</html>