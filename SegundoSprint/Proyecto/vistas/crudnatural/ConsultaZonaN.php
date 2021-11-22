<?php 

include_once 'modelo/ControladorNatural/BuscarZonaNController.php';

?>
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
          <td style="border:solid darkgrey;"><a href="vistas/crudnatural/EditarZonaN.php?id=<?php echo $dato->ID_ZonaNA; ?>" class="btn btn-primary" style="margin-top:5px;"> Editar </a> &nbsp&nbsp
            <a href="modelo/ControladorNatural/EliminarZonaNController.php?id=<?php echo $dato->ID_ZonaNA; ?>" class="btn btn-danger" style="margin-top:5px;margin-bottom:5px;"> Eliminar </a></td>
        </tr>
        <?php 
          }
        ?>
      </tbody>
    </table>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>