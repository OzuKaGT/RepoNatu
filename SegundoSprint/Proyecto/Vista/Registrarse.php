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
                <li> <a href="../Vista/Mapa.php ">Mapa</a> </li>
            </ul>
        </nav>
    </header>
    <section>
    <br>
    <div class="formularioR">
        <form method="POST" class="formularioT">
            <legend class="TituloReg">&nbsp Registrate </legend>
            <p id="textopq">&nbsp&nbsp&nbsp&nbsp  Es rapido y facil </p>
            <input type="text" placeholder=" Nombres " name="nombres" class="cajitasW" required><br><br>
            <input type="text" placeholder=" Apellidos " name="apellidos" class="cajitasW" required><br><br>
            <p style="size: 10px;"> Fecha de Nacimiento </p>
            <input type="text" placeholder=" AAAA-MM-DD " name="fecha" class="cajitasW" required><br><br>
            <input type="text" placeholder="  Numero de telefono " name="numb" class="cajitasW" max="10" required><br><br>
            <input type="email" placeholder="  Correo electronico " name="email" class="cajitasW" required><br><br>
            <input type="password" placeholder="  Contraseña " name="pass" class="cajitasW" required><br><br><br>
            <input type="submit" name="registro" value="Registrarse" class="boton"><br><br>
            <input type="hidden" name="oculto">
            <?php
                include_once ("../Controlador/AgregarController.php");
            ?>
        </form>
    </div>
    </section>
    <br><br><br><br><br>
</body>
</html>