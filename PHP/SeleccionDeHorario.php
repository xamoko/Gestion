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
<form name="solicitudes" id="solicitudes" method="post" onblur="limpia()"  >
              <table>
               <tr align="center">
               
               <td>Lunes</td>
               <td>Martes</td>
               <td>Miercoles</td>
               <td>Jueves</td>
               <td>Viernes</td>
               <td>Sabado</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="7:00-8:00">7:00-8:00</td>
                   <td><input type="checkbox" id="7:00-8:00">7:00-8:00</td>
                   <td><input type="checkbox" id="7:00-8:00">7:00-8:00</td>
                   <td><input type="checkbox" id="7:00-8:00">7:00-8:00</td>
                   <td><input type="checkbox" id="7:00-8:00">7:00-8:00</td>    
                   <td><input type="checkbox" id="7:00-8:00">7:00-8:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="8:00-9:00">8:00-9:00</td>
                   <td><input type="checkbox" id="8:00-9:00">8:00-9:00</td>
                   <td><input type="checkbox" id="8:00-9:00">8:00-9:00</td>
                   <td><input type="checkbox" id="8:00-9:00">8:00-9:00</td>
                   <td><input type="checkbox" id="8:00-9:00">8:00-9:00</td>    
                   <td><input type="checkbox" id="8:00-9:00">8:00-9:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="9:00-10:00">9:00-10:00</td>
                   <td><input type="checkbox" id="9:00-10:00">9:00-10:00</td>
                   <td><input type="checkbox" id="9:00-10:00">9:00-10:00</td>
                   <td><input type="checkbox" id="9:00-10:00">9:00-10:00</td>
                   <td><input type="checkbox" id="9:00-10:00">9:00-10:00</td>    
                   <td><input type="checkbox" id="9:00-10:00">9:00-10:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="10:00-11:00">10:00-11:00</td>
                   <td><input type="checkbox" id="10:00-11:00">10:00-11:00</td>
                   <td><input type="checkbox" id="10:00-11:00">10:00-11:00</td>
                   <td><input type="checkbox" id="10:00-11:00">10:00-11:00</td>
                   <td><input type="checkbox" id="10:00-11:00">10:00-11:00</td>    
                   <td><input type="checkbox" id="10:00-11:00">10:00-11:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="11:00-12:00">11:00-12:00</td>
                   <td><input type="checkbox" id="11:00-12:00">11:00-12:00</td>
                   <td><input type="checkbox" id="11:00-12:00">11:00-12:00</td>
                   <td><input type="checkbox" id="11:00-12:00">11:00-12:00</td>
                   <td><input type="checkbox" id="11:00-12:00">11:00-12:00</td>    
                   <td><input type="checkbox" id="11:00-12:00">11:00-12:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="12:00-13:00">12:00-13:00</td>
                   <td><input type="checkbox" id="12:00-13:00">12:00-13:00</td>
                   <td><input type="checkbox" id="12:00-13:00">12:00-13:00</td>
                   <td><input type="checkbox" id="12:00-13:00">12:00-13:00</td>
                   <td><input type="checkbox" id="12:00-13:00">12:00-13:00</td>    
                   <td><input type="checkbox" id="12:00-13:00">12:00-13:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="13:00-14:00">13:00-14:00</td>
                   <td><input type="checkbox" id="13:00-14:00">13:00-14:00</td>
                   <td><input type="checkbox" id="13:00-14:00">13:00-14:00</td>
                   <td><input type="checkbox" id="13:00-14:00">13:00-14:00</td>
                   <td><input type="checkbox" id="13:00-14:00">13:00-14:00</td>    
                   <td><input type="checkbox" id="13:00-14:00">13:00-14:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="14:00-15:00">14:00-15:00</td>
                   <td><input type="checkbox" id="14:00-15:00">14:00-15:00</td>
                   <td><input type="checkbox" id="14:00-15:00">14:00-15:00</td>
                   <td><input type="checkbox" id="14:00-15:00">14:00-15:00</td>
                   <td><input type="checkbox" id="14:00-15:00">14:00-15:00</td>    
                   <td><input type="checkbox" id="14:00-15:00">14:00-15:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="15:00-16:00">15:00-16:00</td>
                   <td><input type="checkbox" id="15:00-16:00">15:00-16:00</td>
                   <td><input type="checkbox" id="15:00-16:00">15:00-16:00</td>
                   <td><input type="checkbox" id="15:00-16:00">15:00-16:00</td>
                   <td><input type="checkbox" id="15:00-16:00">15:00-16:00</td>    
                   <td><input type="checkbox" id="15:00-16:00">15:00-16:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="16:00-17:00">16:00-17:00</td>
                   <td><input type="checkbox" id="16:00-17:00">16:00-17:00</td>
                   <td><input type="checkbox" id="16:00-17:00">16:00-17:00</td>
                   <td><input type="checkbox" id="16:00-17:00">16:00-17:00</td>
                   <td><input type="checkbox" id="16:00-17:00">16:00-17:00</td>    
                   <td><input type="checkbox" id="16:00-17:00">16:00-17:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="17:00-18:00">17:00-18:00</td>
                   <td><input type="checkbox" id="17:00-18:00">17:00-18:00</td>
                   <td><input type="checkbox" id="17:00-18:00">17:00-18:00</td>
                   <td><input type="checkbox" id="17:00-18:00">17:00-18:00</td>
                   <td><input type="checkbox" id="17:00-18:00">17:00-18:00</td>    
                   <td><input type="checkbox" id="17:00-18:00">17:00-18:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="18:00-19:00">18:00-19:00</td>
                   <td><input type="checkbox" id="18:00-19:00">18:00-19:00</td>
                   <td><input type="checkbox" id="18:00-19:00">18:00-19:00</td>
                   <td><input type="checkbox" id="18:00-19:00">18:00-19:00</td>
                   <td><input type="checkbox" id="18:00-19:00">18:00-19:00</td>    
                   <td><input type="checkbox" id="18:00-19:00">18:00-19:00</td>
               </tr>
               <tr align="center">
                   <td><input type="checkbox" id="19:00-20:00">19:00-20:00</td>
                   <td><input type="checkbox" id="19:00-20:00">19:00-20:00</td>
                   <td><input type="checkbox" id="19:00-20:00">19:00-20:00</td>
                   <td><input type="checkbox" id="19:00-20:00">19:00-20:00</td>
                   <td><input type="checkbox" id="19:00-20:00">19:00-20:00</td>    
                   <td><input type="checkbox" id="19:00-20:00">19:00-20:00</td>
               </tr>
<tr>
<td>
<input type="button" value="Generar Horario" id="boton" onClick="ValidarSolicitud()">
</td>
</tr>

 </table>
                            </form>
</section>
<div align="center" id="respuesta"></div>

  
    </body>
</html>