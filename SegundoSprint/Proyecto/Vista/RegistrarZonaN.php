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
        <a href="../Index.php">
        <img src="../Imagenes/LogoD.png" alt="Logo" id="logo" >
        <img src="../Imagenes/LogoC.png" alt="" id="logo2">
        </a>
        <nav>
            <ul class="nav_links">
                <li> <a href="../Index.php">Inicio</a> </li>
                <li> <a href="Mapa.php ">Mapa</a> </li>
            </ul>
        </nav>
    </header>
    <section>
    <br>
    <div class="formularioR">
        <form action="../Controlador/AgregarZonaNController.php" method="POST" class="formularioT">
            <legend class="TituloReg">&nbsp Registrar Zona Natural</legend>
            <p id="textopq">&nbsp&nbsp&nbsp&nbsp  Es rapido y facil </p>
            <input type="text" placeholder=" Nombre " name="nombre" class="cajitasW" required><br><br>
            <input type="text" placeholder=" Ubicacion " name="ubicacion" class="cajitasW" required><br><br>
            <textarea placeholder="Descripcion" name="descrip" class="cajitasW" cols="30" rows="10"></textarea><br><br>
            <input type="text" placeholder=" URL Imagen " name="image" class="cajitasW" required><br><br>
            <input type="submit" name="registro" value="Registrarse" class="boton"><br><br>
            <input type="hidden" name="oculto">
        </form>
        <a href="ConsultaZonaN.php">Consultar Zonas Naturales Creadas</a>
    </div>
    <div id="RRegistro">
    <?php 
    
    include ('../Modelo/Conectar.php');

    ?>
    </div>
    <br><br><br><br><br>
</body>
</html>