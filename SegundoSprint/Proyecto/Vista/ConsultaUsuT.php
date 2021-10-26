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
    <br><br>
    <table class="Tabla">
    <tr class="Tabla">
        <label class="tituloTabla"> Usuarios registrados (TABLA) </label>
        <br><br>
    </tr>
    <tr class="Tabla">
        <td class="Columnas"> Nombres </td>
        <td class="Columnas"> Apellidos </td>
        <td class="Columnas"> Numero Telefonico </td>
        <td class="Columnas"> Correo Electronico </td>
    </tr>
    <?php
    include ("../Modelo/Conexion.php");
        $y=new conexion();
        $t=mysqli_query($y,"SELECT * FROM usuarios") or
        die("problemas en la consulta:".mysqli_error($y));
        ?>
        <?php
        while($reg=mysqli_fetch_array($t)){
        ?>
    <tr class="Tabla">
        <td class="contenidoTabla"><?php  echo "{$reg['Nombres']} <br>"; ?></td>
        <td class="contenidoTabla"><?php  echo "{$reg['Apellidos']} <br>"; ?></td>
        <td class="contenidoTabla"><?php  echo "{$reg['Telefono']} <br>"; ?></td>
        <td class="contenidoTabla"><?php  echo "{$reg['Correo']} <br>"; ?></td>
    </tr>
       <?php 
        }//cierra while
       ?>
</table>
</section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer id="contactos">
        <br>
        <legend id="TituContact"> Contactenos </legend><br>
        <p class="Contact"> Linea Gratuita: <b>01 8000 8888</b> </p>
        <p class="Contact"> Correo: <b>NatuPoints@gmail.com </b></p>
        <br>
    </footer>
</body>
</html>