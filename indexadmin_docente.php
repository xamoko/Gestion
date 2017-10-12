<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <title></title>
            <!--ESTILO-->
            <link rel="stylesheet" type="text/css" href="css/desktop.css">
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
            <a href="#"><li></li></a>
            <a href="#"><li>Inicio</li></a>
            
            <a href="logout.php"><li>Salir</li></a>
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
                    </br>
                    </br>
                            <img src="img/header2161.jpg">
                            
                    </section>
            </header>
<section id="contenedorbajo">
    <a href="php/SeleccionDeHorario.php">
        <article>
            <img src="img/registro.png">
            <h3>Eleccion de Horario</h3>
        </article>
    </a>
    <a href="php/ListadoDeMaterias.php">
        <article>
            <img src="img/registro.png">
            <h3>Eleccion de Materias</h3>
        </article>
    </a>
    <a href="#">
        <article>
            <img src="img/registro.png">
            <h3>Eleccion de Actividades de Descarga</h3>
        </article>
    </a>
   
</section>



    
            <footer>
            
        </footer>
    </body>
</html>