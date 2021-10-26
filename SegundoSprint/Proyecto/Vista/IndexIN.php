<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Imagenes/Icon.png">
    <link rel="stylesheet" href="../CSS/Estilo.css">
    <title> NatuPoints </title>
</head>     
<body id="fondo">
<header>
        <a href="IndexIN.php">
        <img src="../Imagenes/LogoD.png" alt="Logo" id="logo" >
        <img src="../Imagenes/LogoC.png" alt="" id="logo2">
        </a>
        <nav>
            <ul class="nav_links">
                <li> <a href="IndexIN.php">Inicio</a> </li>
                <li> <a href="MapaIN.php">Mapa</a> </li>
                <li> <a href="../Controlador/EleccionConsulta.php"> Consulta </a> </li>
            </ul>
        </nav>
    </header>
    <section>
        <table>
            <tr>
                <td id="importancia5"><br>
                    <label id="tituloCo"> Bienvenido Usuario </label><br>
                    <p class="contenidoCo"> Haz iniciado sesion en nuestra pagina NatuPoints. Esperamos disfrutes de tu instancia en este sitio web. </p><br>
                    <div class="field" id="searchform">
                        <input type="search" id="searchterm" placeholder="¿A donde quieres ir hoy?" size="30">
                        <button type="button" id="search"><img src="../Imagenes/Lupa.png" alt="lupita" id="lupita"></button>
                    </div>
                <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
                </td>
            </tr>
                <aside class="cuadrito4">
                    <form method="POST" >
                    <legend class="tituloCu"> Cerrar Sesion </legend><br><br>
                    <input type="submit" name="Close" value="Cerrar" class="boton"><br><br>
                    <?php 
                        include ('../Modelo/Cierre.php');
                    ?>
                    </form>
                </aside>
            </tr>
        </table>
    </section>
    <br>
    <footer id="contactos">
        <br>
        <legend id="TituContact"> Contactenos </legend><br>
        <p class="Contact"> Linea Gratuita: <b>01 8000 8888</b> </p>
        <p class="Contact"> Correo: <b>NatuPoints@gmail.com </b></p>
        <br>
    </footer>
</body>
</html>