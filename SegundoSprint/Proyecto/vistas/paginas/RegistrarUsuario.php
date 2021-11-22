<section>
    <br>
    <div class="mb-3" style="text-align:center;background-color:#9de0ad;margin-left:18%;margin-right:18%;padding:10px 0 10px 0 ;border:dashed 1px;">
        <form method="POST" class="formularioT">
            <legend><b> Registrate </b></legend>
            <p> Es rapido y facil </p>
            <input type="text" placeholder=" Nombres " name="nombres" class="cajitasW" required><br><br>
            <input type="text" placeholder=" Apellidos " name="apellidos" class="cajitasW" required><br><br>
            <p style="size: 10px;"> Fecha de Nacimiento </p>
            <input type="text" placeholder=" AAAA-MM-DD " name="fecha" class="cajitasW" required><br><br>
            <input type="text" placeholder="  Numero de telefono " name="numb" class="cajitasW" min="2" max="10" required><br><br>
            <input type="email" placeholder="  Correo electronico " name="email" class="cajitasW" required><br><br>
            <input type="password" placeholder="  Contraseña " name="pass" class="cajitasW" required><br><br><br>
            </select>
            <input type="submit" name="registro" value="Registrarse" class="btn btn-success"><br><br>
        </form>
    </div>
    </section>
    <div id="RRegistro">
    <?php 
    
    include_once ('modelo/Conectar.php');

    ?>
    </div>
    <br><br><br><br><br><br>