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
            <script language="javascript">jQuery(document).ready(function(){jQuery("#solicitudes").validationEngine();});</script>
            <script src="../validaciones/GenerarSolicitud.js" type="text/javascript"></script>
            
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
                <a href="#"><li></li></a>
                <a href="../indexadmin_docente.php"><li>Menu</li></a>
                <!--<a href="../html/login_admin.php"><li>Registrarme</li></a>-->
                <a href="../logout.php"><li>Salir</li></a>
            <li><?php
                                    session_start();
                                    echo 'Bienvenido: ';
                                    if (isset($_SESSION['k_username'])) {
                                    echo '<b>'.$_SESSION['k_username'].'</b>.';
                                    echo '';
                                    }else{
                                    echo '<script language="JavaScript" type="text/javascript">
                                    var pagina="html/login_admin.php"
                                    function redireccionar() 
                                    {
                                    location.href=pagina
                                    } 
                                    setTimeout ("redireccionar()", 10);
                                                            
                                    </script>';
                                    }
                                    
;                ?> 
            </li>

        </ul>
    </section>
</nav>

            <section id="separador"><br></section>

            <header>
                    <section id="imagenes">
                            <img src="../img/header2161.jpg">
                            <!--<img src="../img/itsm.png">-->
                    </section>
            </header>
<section id="loginn">
<!-- <form name="solicitudes" id="solicitudes" method="post" onblur="limpia()"  > -->
<form name="solicitudes" id="solicitudes" method="post" action="g.php"  >
              <table>
              <tr>
                                <tr>
                                <!-- <td class='t3' align ='center'>Materias registradas    </td> -->
                                <td class='t3' align ='center'>Seleccion    </td>
                                <td class='t3' align ='center'>Plan de Estudios    </td>
                                <td class='t3' align ='center'>Nombre de la Materia</td>
                                <td class='t3' align ='center'>Clave               </td>
                                <td class='t3' align ='center'>Horas de Materia    </td>
                                <td class='t3' align ='center'>Carrera             </td>
                                <td class='t3' align ='center'>Creditos            </td>
                                <td class='t3' align ='center'>Por Que Quieres Dar Esa Materia</td>
                                <td class='t3' align ='center'>Solicitantes        </td>
                            </tr>


<?php
require ('conexion.php');

		
		$query		=	"SELECT * FROM AgregarMateria ";
        $query2 = "SELECT count(seleccion) FROM solicitantes";
        $query3 = "SELECT count(clave) from AgregarMateria";
		
		$result=mysql_query($query,$conexion);
        $result2=mysql_query($query2,$conexion);
        $result3=mysql_query($query3,$conexion);
		echo mysql_error();
        $row2 = mysql_fetch_array($result2); 
        $row3 = mysql_fetch_array($result3); 

        //$seleccion = " "; 

                           while ($row = mysql_fetch_array($result)){ 
                                echo "
                            <tr>
                            
                                <td align ='center'><select name='seleccion[]'</br>
                                                        <option value='No'>No</option>
                                                        <option value='Si'>Si</option>
                                                    </select></td> 
                                <td align ='center'><a href=>".$row[0]."</a><input type='hidden' name='PlanDeEstudios[]' value='".$row[0]."'></td>
                                <td align ='center'><input type='hidden' name='NombreDeLaMateria[]' value='".$row[1]."'>".$row[1]."</td>
                                <td align ='center'><input type='hidden' name='Clave[]' value='".$row[2]."'>".$row[2]."</td>
                                <td align ='center'><input type='hidden' name='HorasDeMateria[]' value='".$row[3]."'>".$row[3]."</td>
                                <td align ='center'><input type='hidden' name='Carrera[]' value='".$row[4]."'>".$row[4]."</td>
                                <td align ='center'><input type='hidden' name='Creditos[]' value='".$row[5]."'>".$row[5]."</td>
                                <td align ='center'><textarea placeholder='Redacte el por que es el mejor para impartir esta materia' name='TextArea[]'></textarea></td>
                                <td align ='center'><input type='hidden' name='solicitantes[]' value='".$row2[0]."'>".$row2[0]."</td>
                            </tr>

                            
                           ";
                            /*//$seleccion = $_POST['seleccion'];
                            $PlanDeEstudios  = $row[0];
                            $NombreDeLaMateria = $row[1];
                            $clave = $row[2];
                            $HorasDeMateria = $row[3];
                            $Carrera = $row[4];
                            $Creditos = $row[5];
                            //$TextArea = $row2[0];
                           $solicitantes = $row2[0];*/
}



		/*if($result)
		{
			//echo '<span class="green_text">El medicamento se ha registrado con exito.</span>';
			
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un error al intentar registrar al medicamento.</span>';
		} */

    /*$seleccion = $_POST['seleccion'];
//$PlanDeEstudios  = $_POST[$dato];
$NombreDeLaMateria = $_POST['NombreDeLaMateria'];
$clave = $_POST['Clave'];
$HorasDeMateria = $_POST['HorasDeMateria'];
$Carrera = $_POST['Carrera'];
$Creditos = $_POST['Creditos'];
$TextArea = $_POST['textarea'];*/
        
        
            //for($i=0; $i<$row3[0]; $i++){
                //if($seleccion != "No"){
                   /* while ($roww = mysql_fetch_row($result)){ 

                        $query = "INSERT INTO solicitantes values ('algo',
                                                          '".$roww[0]."',
                                                          '".$roww[1]."',
                                                          '".$roww[2]."',
                                                          '".$roww[3]."',
                                                          '".$roww[4]."',
                                                          '".$roww[5]."',
                                                          'texto',
                                                          '".$_SESSION['k_username']."')";


 
                    $result=mysql_query($query,$conexion);
                        echo mysql_error();
                        echo "se agrego con exito";
                        echo $result,$query,$row3[0],$seleccion,$roww;
    //}
}*/
 
 /*else {
    echo "La Solicitud No Fue Generada Seleccione Al Menos Una Materia.";

     }*/
 //}



?>
<tr>
<td>
<!-- <input type="button" value="Generar Solicitud" id="boton" onClick="ValidarSolicitud()"> -->
<input type="submit" value="Generar Solicitud" id='boton'>
</td>
</tr>

 </table>
                            </form>
</section>
<div align="center" id="respuesta"></div>

  
    </body>
</html>