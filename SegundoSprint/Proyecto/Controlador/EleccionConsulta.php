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
        <a href="../Vista/IndexIN.php">
        <img src="../Imagenes/LogoD.png" alt="Logo" id="logo" >
        <img src="../Imagenes/LogoC.png" alt="" id="logo2">
        </a>
        <nav>
            <ul class="nav_links">
                <li> <a href="../Vista/IndexIN.php">Inicio</a> </li>
                <li> <a href="../Vista/MapaIN.php ">Mapa</a> </li>
            </ul>
        </nav>
    </header>
    <section>
    <br>
    <div class="formularioConsulta">
        <br>
        <legend class="tituloTabla"> Seleccione el estilo de consulta a realizar </legend><br><br><br>
        <a href="../Vista/ConsultaUsuT.php" class="botonTabla"> Tabla </a><br><br><br>
        <a href="../Vista/ConsultaUsu.php" class="botonTabla"> Sencillo </a><br><br><br>
    </div>
    <div id="RRegistro">
    <?php 
    
    include ('ValidarRegistro.php');

    ?>
    </div>
    <br><br><br><br><br>
</body>
</html>