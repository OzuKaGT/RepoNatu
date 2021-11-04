<?php 

include_once '../Controlador/BuscarZonaNController.php';

?>
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
        <table style="background-color:white;border:solid darkgrey;">
      <thead style="border:solid darkgrey;">
        <tr style="border:solid darkgrey;">
          <th scope="col" style="border:solid darkgrey;">#ID</th>
          <th scope="col" style="border:solid darkgrey;">Nombre</th>
          <th scope="col" style="border:solid darkgrey;">Descripcion</th>
          <th scope="col" style="border:solid darkgrey;">Ubicacion</th>
          <th scope="col" style="border:solid darkgrey;">Imagen</th>
          <th scope="col" style="border:solid darkgrey;">Accion</th>
        </tr>
      </thead>
      <tbody> 
        <?php 
          foreach ($solicitudes as $dato) {
        ?>
        <tr style="border:solid darkgrey;">
          <th style="border:solid darkgrey;"><?php echo $dato->ID_ZonaNA; ?></th>
          <td style="border:solid darkgrey;"><?php echo $dato->Nombre; ?></td>
          <td style="border:solid darkgrey;"><?php echo $dato->Descripcion; ?></td>
          <td style="border:solid darkgrey;"><?php echo $dato->Ubicacion; ?></td>
          <td style="border:solid darkgrey;"><?php echo $dato->Imagen; ?></td>
          <td style="border:solid darkgrey;"><a href="EditarZonaN.php?id=<?php echo $dato->ID_ZonaNA; ?>" style="color:black;background-color:transparent;text-decoration:underline;text-shadow: #33a24f;"> Editar </a> &nbsp&nbsp
            <a href="../Controlador/EliminarZonaNController.php?id=<?php echo $dato->ID_ZonaNA; ?>" style="color:black;background-color:transparent;text-shadow: #33a24f;"> Eliminar </a></td>
        </tr>
        <?php 
          }
        ?>
      </tbody>
    </table>
    </section>
</body>
</html>