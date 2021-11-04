<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagenes/Icon.png">
    <link rel="stylesheet" href="CSS/Estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title> NatuPoints </title>
</head>     
<body id="fondo">
    <header>
        <a href="Index.php">
        <img src="Imagenes/LogoD.png" alt="Logo" id="logo" >
        <img src="Imagenes/LogoC.png" alt="" id="logo2">
        </a>
        <nav class="container-xl">
            <ul class="nav_links">
                <li> <a href="Index.php">Inicio</a> </li>
                <li> <a href="Vista/Mapa.php">Mapa</a> </li>
                <li> <a href="Vista/DesicionZona.php">Nueva Zona</a> </li>
            </ul>
        </nav>
    </header>
    <section>
        <table class="container-sm">
            <tr>
                <aside class="Formato">
                <form method="POST"> 
                    <legend id="Sub_F"> INGRESA A TU CUENTA </legend>
                    <label class="TituF"> Correo: </label><br><br>
                    <input type="text" placeholder="Correo Electronico" id="caja1" name="Correo" required><br><br>
                    <legend class="TituF"> Contraseña: </legend><br>
                    <input type="password" placeholder="Contraseña" id="caja2" name="Contra" required><br><br>
                    <legend class="TituF"> ¿No tienes cuenta? Registrate <a href="Vista/Registrarse.php" target="blank" style="color: red;
	                    background-color: #9de0ad;"> aqui </a></legend><br>
                    <input type="submit" name="entrar" value="Ingresar" class="boton"><br><br>           
                    <?php 
                        include_once ('Controlador/ValidarInicio.php');
                    ?>
                </form>
                </aside>
            </tr>
            <tr>
                <td id="importancia1"><br>
                    <label class="tituloC"> Humedal Neuta </label><br>
                    <img src="Imagenes/Humedal.jpg" alt="humedal" class="image">
                    <p class="contenido"> Humedal que se encuentra por la via indumil, este pequeño ecosistema se encuentra protegido por la alcaldia soachuna para poderlo preservar. Sin embargo han habido diversas falencias en la proteccion de este lugar. <br><a href="Vista/Neuta.php" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br>
                </td>
            </tr>
            <br><br>
            <tr>
                <td id="importancia2"><br>
                    <label class="tituloC"> Humedal Tierra Blanca </label><br>
                    <img src="Imagenes/Humedal1.jpg" alt="humedal1" class="image">
                    <p class="contenido"> Humedal ubicado en el barrio Compartir de Soacha. Este humedal se creia perdido, pero las autoridades se hicieron cargo de limpiarlo y dejarlo nuevamente como un pequeño habitat. <br><a href="Vista/TierraB.php" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br>
                </td>
            </tr>
            <br><br>
            <tr>
                <td id="importancia3"><br>
                    <label class="tituloC"> Parque Tibanica </label><br>
                    <img src="Imagenes/Parque.jpg" alt="tibanica" class="image">
                    <p class="contenido"> Parque ubicado en el barrio San Mateo - Soacha. Este parque cuenta con una gran cantidad de pasto, cuenta con canchas de tenis, futbol y baloncesto. Tambien cuenta con una edificacion para eventos y zonas recreativas para hacer ejercicio, tanto para adultos como para niños. <br><a href="Vista/Tibanica.php" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br>
                </td>
            </tr>
            <br><br>
            <tr>
                <td id="importancia4"><br>
                    <label class="tituloC"> Polideportivo Compartir </label><br>
                    <img src="Imagenes/Polideportivo.jpg" alt="poli" class="image">
                    <p class="contenido"> Parque que se encuentra ubicado en el barrio Compartir - Soacha. Este parque cuenta con gran cantidad de pasto, cuenta con diversas canchas deportivas y una gran pista de patinaje. Tambien cuenta con zonas recreativas para adultos o niños. <br><a href="Vista/Poli.php" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br>
                </td>
            </tr>
        </table>
    </section>
    <?php 
    
    include_once ('Modelo/Conectar.php');
    
    ?>
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