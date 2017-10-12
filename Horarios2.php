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
                            <img src="  img/header2161.jpg">
                            <!--<img src="../img/itsm.png">-->
                    </section>
            </header>
<section id="loginnn">
<!-- <form name="solicitudes" id="solicitudes" method="post" onblur="limpia()"  > -->
<form name="solicitudes" id="solicitudes" method="post" action="GenerarHorario.php"  >
             <table>
               
               <tr align="center">
               
               <td><select name="select[]">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="Lunes" value="Lunes">Lunes</td>
               <td><select name="select[]">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="Martes" value="Martes">Martes</td>
               <td><select name="select[]">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="Miercoles" value="Miercoles">Miercoles</td>
               <td ><select name="select[]">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden" name="Jueves" value="Jueves">Jueves</td>
               <td><select name="select[]">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="Viernes" value="Viernes">Viernes</td>
               <td><select name="select[]">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="Sabado" value="Sabado">Sabado</td>
               </tr>
               <tr align="center">
                   <td><select name="">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="" value="7:00-8:00">7:00-8:00</td>
                   <td><select name="">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="" value="7:00-8:00">7:00-8:00</td>
                   <td><select name="">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="" value="7:00-8:00">7:00-8:00</td>
                   <td><select name="">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="" value="7:00-8:00">7:00-8:00</td>
                   <td><select name="">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="" value="7:00-8:00">7:00-8:00</td>    
                   <td><select name="">
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select><input type="hidden"  name="" value="7:00-8:00">7:00-8:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>8:00-9:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>8:00-9:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>8:00-9:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>8:00-9:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>8:00-9:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>8:00-9:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>9:00-10:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>9:00-10:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>9:00-10:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>9:00-10:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>9:00-10:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>9:00-10:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>10:00-11:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>10:00-11:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>10:00-11:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>10:00-11:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>10:00-11:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>10:00-11:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>11:00-12:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>11:00-12:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>11:00-12:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>11:00-12:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>11:00-12:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>11:00-12:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>12:00-13:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>12:00-13:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>12:00-13:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>12:00-13:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>12:00-13:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>12:00-13:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>13:00-14:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>13:00-14:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>13:00-14:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>13:00-14:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>13:00-14:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>13:00-14:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>14:00-15:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>14:00-15:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>14:00-15:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>14:00-15:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>14:00-15:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>14:00-15:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>15:00-16:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>15:00-16:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>15:00-16:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>15:00-16:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>15:00-16:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>15:00-16:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>16:00-17:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>16:00-17:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>16:00-17:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>16:00-17:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>16:00-17:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>16:00-17:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>17:00-18:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>17:00-18:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>17:00-18:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>17:00-18:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>17:00-18:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>17:00-18:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>18:00-19:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>18:00-19:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>18:00-19:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>18:00-19:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>18:00-19:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>18:00-19:00</td>
               </tr>
               <tr align="center">
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>19:00-20:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>19:00-20:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>19:00-20:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>19:00-20:00</td>
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>19:00-20:00</td>    
                   <td><select>
                   <option value="No">No</option>
                   <option value ="Si">Si</option></select>19:00-20:00</td>
               </tr>
 </table>
 <input type="submit" value="Generar" id="boton">
                            </form>
</section>
<div align="center" id="respuesta"></div>

  
    </body>
</html>