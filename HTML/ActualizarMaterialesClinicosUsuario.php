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
			<script language="javascript">jQuery(document).ready(function(){jQuery("#validar_actualizar_Medicamento").validationEngine();});</script>
			<script src="../validaciones/validar_Actualizar_MaterialesClinicos.js" type="text/javascript"></script>
            <script language="javascript">jQuery(document).ready(function(){jQuery("#validar_actualizar_Medicamento2").validationEngine();});</script>
            <script src="../validaciones/validar_actualizar_MaterialesClinicos2.js" type="text/javascript"></script>
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
            <a href="../html/MaterialesClinicosUsuario.php"><li>Inicio</li></a>
            <a href="#"><li></li></a>
            <a href="h#"><li></li></a>
            <a href="login.php"><li>Salir</li></a>
            <li><?php
                                    session_start();
                                    echo 'Bienvenido doctor ';
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
		<form name="validar_actualizar_MaterialesClinicos" id="validar_actualizar_MaterialesClinicos" method="post" onblur="limpia()"  >

        <h3>Introduzca la Clave del Material que desea Actualizar </h3>

		 <table class="tb1">

            <tr>
                <td class="t3">Clave</td>
                <td><input type="text" name="clave" id="clave" placeholder="Clave" class="validate[required]"></td>
                    </tr>

                    <tr><td></td>
				<td class="t3"><input type="button" value="Buscar" onClick="valida_actualizar_MaterialesClinicoss()"></td>
				    </tr>   
        </table>
					
		</form>
        <a href='javascript:window.print(); void 0;'><input type="submit" name="Imprimir" value="Imprimir"></a> 
 	</section>
    <div align="center" id="respuesta"></div>


</body>
</html>