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
    <div class="ContenidoConsultaS">
<?php
    include ("../Modelo/Conexion.php");
        $f=new conexion();
        $registro=mysqli_query($f,"SELECT * FROM usuarios ") or
        die("problemas en la consulta:".mysqli_error($f));
    ?>
    <h1>Los Datos de los Aprendices Son:</h1>
    <?php
    while($reg=mysqli_fetch_array($registro)){
        echo "Nombres:" .$reg['Nombres'] ."<br>";
        echo "Apellidos:" .$reg['Apellidos'] ."<br>";
        echo "Numero Telefonico:" .$reg['Telefono'] ."<br>";
        echo "Correo Electronico:" .$reg['Correo'] ."<br>";

        echo "<br>";

    }

mysqli_close($f);
?>
</div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer id="contactos">
    <br>
    <legend id="TituContact"> Contactenos </legend><br>
    <p class="Contact"> Linea Gratuita: <b>01 8000 8888</b> </p>
    <p class="Contact"> Correo: <b>NatuPoints@gmail.com </b></p>
    <br>
</footer>
</body>
</html>