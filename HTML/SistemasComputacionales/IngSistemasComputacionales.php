<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <title></title>
            <!--ESTILO-->
            <link rel="stylesheet" type="text/css" href="../../css/desktop.css">
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
            <a href="#"><li></li></a>
            <a href="../../indexadmin_admin.php"><li>Inicio</li></a>
            
            <a href="../../logout.php"><li>Salir</li></a>
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
                ?> 
            </li>
        </ul>
    </section>
</nav>

            <section id="separador"><br></section>

            <header>
                    <section id="imagenes">
                            <img src="../../img/header2161.jpg">
                            
                    </section>
            </header>
<section id="contenedorbajo">
    
    <a href="AgregarMateriaSistemasComputacionales.php">
        <article>
            <img src="../../img/registro.png">
            <h3>Agregar Materia</h3>
        </article>
    </a>
    <a href="BuscarMateriaSistemasComputacionales.php">
        <article>
            <img src="../../img/registro.png">
            <h3>Buscar Materia</h3>
        </article>
    </a>
    <a href="EliminarMateriaSistemasComputacionales.php">
        <article>
            <img src="../../img/eliminar.jpg">
            <h3>Eliminar Materia</h3>
        </article>
    </a>
    <a href="ActualizarMateriaSistemasComputacionales.php">
        <article>
            <img src="../../img/eliminar.jpg">
            <h3>Actualizar Materia</h3>
        </article>
    </a>
    
    
</section>



    
            <footer>
            
        </footer>
    </body>
</html>