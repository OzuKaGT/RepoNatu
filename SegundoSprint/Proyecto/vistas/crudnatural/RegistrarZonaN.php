<section>
    <br>
    <div class="mb-3" style="text-align:center;background-color:#9de0ad;margin-left:18%;margin-right:18%;padding:10px 0 10px 0 ;border:dashed 1px;">
        <form action="modelo/ControladorNatural/AgregarZonaNController.php" method="POST">
            <legend class="TituloReg"><b> Registrar Zona Natural </b></legend>
            <p id="textopq"> Es rapido y facil </p>
            <input type="text" placeholder=" Nombre " name="nombre" class="cajitasW" required><br><br>
            <input type="text" placeholder=" Ubicacion " name="ubicacion" class="cajitasW" required><br><br>
            <textarea placeholder="Descripcion" name="descrip" class="cajitasW" cols="30" rows="10"></textarea><br><br>
            <input type="text" placeholder=" URL Imagen " name="image" class="cajitasW" required><br><br>
            <input type="submit" name="registro" value="Registrarse" class="btn btn-success"><br><br>
            <input type="hidden" name="oculto">
        </form>
        <a href="?controlador=crudnatural&accion=consultazonan" class="btn btn-info">Consultar Zonas Naturales Creadas</a>
    </div>
</section>
    <div>
    <?php 
    
        include ('modelo/Conectar.php');

    ?>
    </div>
    <br><br><br><br><br>