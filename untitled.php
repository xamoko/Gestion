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
<form name="solicitudes" id="solicitudes" method="post" action="untitled2.php"  >
            <table border="1">
              <?php
              $filas = array("01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24");
              $columnas=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
              
              for ($t=0; $t<count($columnas); $t++) { 
                echo "<tr>";
                echo"<td widht='100'>
                          <select name='Seleccion[]'>
                          <option value='No'>No</option>
                          <option value='Si'>Si</option>
                          </select>
                          <input type='hidden' name='array[]' value=".$columnas[$t].">".$columnas[$t]."</td>";
                for ($y=0; $y<count($filas); $y++) { 
                  
                 echo "<td align='center' width=1000>
                        <select name='Seleccion2[]'>
                          <option value='No'>No</option>
                          <option value='Si'>Si</option>
                          </select>
                          <input type='hidden' value=".$filas[$y]." name='array2[]'>".$filas[$y].":00"."
                          </td>";
                    
                }
                //echo"<td>".$columnas[$t]."</td>";
                echo "</tr>";
              }
              ?>
             </table>
 <input type="submit" value="generar">
                            </form>
</section>
<div align="center" id="respuesta"></div>

  
    </body>
</html><!-- 
create table horario(Dia text,Uno text,Dos text,Tres text, Cuatro text,Cinco text,Seis text,Siete text,Ocho text,Nueve text,Diez text,Once text,Doce text,Trece text,Catorce text,Quince text,Dieciseis text,Diecisiete text,Dieciocho text,Diecinueve text,Veinte text,Veintiuno text,Veintidos text,Veintitres text,Veinticuatro text); -->