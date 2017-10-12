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
            <script src="../validaciones/validar_buscar_Medicamento.js" type="text/javascript"></script>
            <script language="javascript">jQuery(document).ready(function(){jQuery("#validar_actualizar_Medicamento2").validationEngine();});</script>
            <script src="../validaciones/validar_actualizar_Medicamento2.js" type="text/javascript"></script>
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
<?php
require ('conexion.php');

	$clave				        = $_POST['clave'];

		
		$query		=	"SELECT descripcion,presentacion,EInicial,TotalEntradas,TotalSalidas,EFinal,FechaCaducacion,NAnaquel,NColumna,NFila FROM medicamentos WHERE clave='".$clave."'";
		
		$result=mysql_query($query,$conexion);
		echo mysql_error();

		$row = mysql_fetch_row($result);

		echo
			  '
              <form name="validar_actualizar_Medicamento2" id="validar_actualizar_Medicamento2" method="post" onblur="limpia()"  >
              <table>
              <tr>
                                <td class="t3">Descripcion</td>
                                <td><input type="text" name="descripcion" id="descripcion" value="'.$row[0].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Presentacion</td>
                                <td><input type="text" name="presentacion" id="presentacion" value="'.$row[1].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Existencia Inicial</td>
                                <td><input type="text" name="existencia_inicial" id="existencia_inicial" value="'.$row[2].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Total Entradas</td>
                                <td><input type="text" name="total_entradas" id="total_entradas" value="'.$row[3].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Total Salidas</td>
                                <td><input type="text" name="total_salidas" id="total_salidas" value="'.$row[4].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Existencia Final</td>
                                <td><input type="text" name="existencia_final" id="existencia_final" value="'.$row[5].'" class="validate[required]"></td>
                            </tr>
                            
                            <tr>
                                <td class="t3">Numero de Anaquel</td>
                                <td><input type="text" name="numero_de_anaquel" id="numero_de_anaquel" value="'.$row[7].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Numero de Columna</td>
                                <td><input type="text" name="numero_de_columna" id="numero_de_columna" value="'.$row[8].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Numero de Fila</td>
                                <td><input type="text" name="numero_de_fila" id="numero_de_fila" value="'.$row[9].'" class="validate[required]"></td>
                            </tr>
                            <tr><td></td>
                                <td class="t3"></td>
                            </tr>  
                            </table>
                            </form>';
		/*if($result)
		{
			//echo '<span class="green_text">El medicamento se ha registrado con exito.</span>';
			
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un error al intentar registrar al medicamento.</span>';
		} */

?>