<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <title></title>
            <!--ESTILO-->
            <link rel="stylesheet" type="text/css" href="../css/desktop.css">
        </head>
<body>

<nav>
    <section id="navcont">
        <ul>
            <a href="#"><li></li></a>
            <a href="../html/menu.php"><li>Inicio</li></a>
            
            <a href="../html/login_admin.php"><li>Salir</li></a>
            <li><?php
                                    session_start();
                                    echo 'Bienvenido doctor ';
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
                            <img src="../img/3.jpg">
                            <img src="../img/descarga.jpg">
                    </section>
            </header>
<section id="contenedorbajo">
    <a href="../html/recetados.php">
        <article>
            <img src="../img/consultar.png">
            <h3>Recetados</h3>
        </article>
    </a>
    <a href="../pdf/ReporteRecetados.php">
        <article>
            <img src="../img/consultar.png">
            <h3>Reporte</h3>
        </article>
    </a>
</section>



    
            <footer>
            <h3 id="direccion">Carretera Villahermosa Ciudad Pemex, Col. La Escalera, Macuspana, Villahermosa Tabasco. Codigo Postal: 86725 Telefono: 93610129</h3>
        </footer>
    </body>
</html>