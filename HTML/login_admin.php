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
            <a href="../index.php"><li>Inicio</li></a>
            <!--<a href="registro_admin.php"><li>Registrar</li></a>-->

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



<section id="login">
    <table>
        <form name="form" id="form" action="../php/validaradmin.php" method="post">
            <tr>
                <td><label>Director Academico</label></td>
            </tr>
            <tr>
                <td><input type="text" name="usuario" id="usuario" Placeholder="Usuario" required></td>
            </tr>
            <tr>
                <td><label>Contraseña</label></td>
            </tr>
            <tr>
                <td><input type="password" name="password" id="password" placeholder="Contraseña" required></td>
            </tr>
            <tr>
                <td><input class="submit" type="submit" value="Entrar"></td>
            </tr>
        </form>
    </table>
</section>

			

			
			        <footer>

        </footer>
    </body>
</html>