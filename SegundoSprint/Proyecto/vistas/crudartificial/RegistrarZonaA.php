    <section>
    <br>
    <div class="mb-3" style="text-align:center;background-color:#9de0ad;margin-left:18%;margin-right:18%;padding:10px 0 10px 0 ;border:dashed 1px;">
        <form action="modelo/ControladorArtificial/AgregarZonaAController.php" method="POST" class="formularioT">
            <legend class="TituloReg"><b> Registrar Zona Artificial </b></legend>
            <p id="textopq"> Es rapido y facil </p>
            <input type="text" placeholder=" Nombre " name="nombre" class="cajitasW" required><br><br>
            <input type="text" placeholder=" Ubicacion " name="ubicacion" class="cajitasW" required><br><br>
            <textarea placeholder="Descripcion" name="descrip" class="cajitasW" cols="30" rows="10"></textarea><br><br>
            <input type="text" placeholder=" URL Imagen " name="image" class="cajitasW" required><br><br>
            <input type="submit" name="registro" value="Registrarse" class="btn btn-success"><br><br>
            <input type="hidden" name="oculto">
        </form>
        <a href=".?controlador=crudartificial&accion=ConsultaZonaA" class="btn btn-info">Consultar Zonas Artificiales Creadas</a>
    </div>
    <div id="RRegistro">
    <?php 
    
    include_once ('modelo/Conectar.php');

    ?>
    </div>
    </section>
    <br><br><br><br><br>