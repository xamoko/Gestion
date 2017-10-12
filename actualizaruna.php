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
<form action="subir.php" method="POST" enctype="multipart/form-data">
  <label for="imagen">Imagen:</label>
  <?php

  echo "Se ha Actualizado con Exito";

  ?>
</form>
</section>
<div align="center" id="respuesta"></div>

<a href=""></a>

  
    </body>
</html>