<section>
        <table class="container-sm">
            <tr>
                <aside class="container-md" style="text-align:center;float:left; width:36%;background-color:#33a24f;border-radius:15px;border:dashed 1px;color:black;">
                <form method="POST"> 
                    <legend class="container-md"><b> INGRESA A TU CUENTA </b></legend>
                    <h5 class="container-md"> Correo: </h5>
                    <input type="text" placeholder="Correo Electronico" style="text-align:center;border-radius:8px;" class="container-md" name="Correo" required><br><br>
                    <h5> Contraseña: </h5>
                    <input type="password" placeholder="Contraseña" style="text-align:center;border-radius:8px;" class="container-md" name="Contra" required><br><br>
                    <legend > ¿No tienes cuenta? Registrate<a href="?controlador=pagina&accion=registrarusuario" class="container-md" style="color: red;background-color: #33a24f;">aqui </a></legend><br>
                    <input type="submit" name="entrar" value="Ingresar" class="btn btn-light container-md" style="width:30%;"><br><br>           
                    <!-- <?php 
                        include_once ('Controlador/ValidarInicio.php');
                    ?> -->
                </form>
                </aside>
                <aside class="container-md" style="text-align:center;float:left; width:50%;background-color:#9de0ad;margin-left:10%;margin-top:1%;margin-bottom:5%;border-radius:15px;border:dashed 1px;font-size:20px;">
                    <legend class="container-md"><b> Nuestra Pagina </b></legend>
                    <p class="container-md">La pagina NatuPoints está hecha con el proposito de ayudar un poco a la economia turistica del municiío de Soacha. </p>
                    <p class="container-md">En está pagina podrás encontrar diferentes zonas turisticas, tanto naturales como artificiales, las cuales podras encontrar informacion como su ubicacion, algunas fotos, etc.</p>
                    <img src="Imagenes/Natu.png" class="container-md" style="width:50%;">
                </aside>
            </tr>
            <h1 style="text-align:center;">Zonas Recomendadas</h1>
            <tr>
                <td style="text-align:center;float:left; width:100%;background-color:#9de0ad;border-radius:15px;border:dashed 1px;margin-top:-5%;"><br>
                    <legend class="tituloC"><b> Humedal Neuta </b></legend><br>
                    <img src="Imagenes/Humedal.jpg" alt="humedal" class="image" style="border-radius:10%;width:20%;float:left;margin-left:2%;margin-right:2%;">
                    <p class="contenido" style="margin-top: 3%;text-align:left;"> Humedal que se encuentra por la via indumil, este pequeño ecosistema se encuentra protegido por la alcaldia soachuna para poderlo preservar. Sin embargo han habido diversas falencias en la proteccion de este lugar. <br>
                    <a href=".?controlador=pagina&accion=Neuta" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br><br>
                    <p style="text-align:left;margin-left:2%;margin-top:1%;font-size:12px;">Imagen tomada de <a href="https://www.eltiempo.com/bogota/espejo-de-agua-del-humedal-neuta-37428" target="blank"> eltiempo.com </a></p>
                </td>
            </tr>
            <br><br>
            <tr>
                <td style="text-align:center;float:left; width:100%;background-color:#9de0ad;border-radius:15px;border:dashed 1px;margin-top:5%;"><br>
                    <legend class="tituloC"><b> Humedal Tierra Blanca </b></legend><br>
                    <img src="Imagenes/Humedal1.jpg" alt="humedal" class="image" style="border-radius:10%;width:20%;float:left;margin-left:2%;margin-right:2%;">
                    <p class="contenido" style="margin-top: 3%;text-align:left;"> Humedal ubicado en el barrio Compartir de Soacha. Este humedal se creia perdido, pero las autoridades se hicieron cargo de limpiarlo y dejarlo nuevamente como un pequeño habitat. <br>
                    <a href=".?controlador=pagina&accion=TierraB" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br><br>
                    <p style="text-align:left;margin-left:2%;margin-top:2%;font-size:12px;">Imagen tomada de <a href="https://www.car.gov.co/saladeprensa/tierra-blanca-el-humedal-que-se-creia-perdido-esta-a-un-paso-de-ser-recuperado" target="blank"> car.gov.co </a></p>
                </td>
            </tr>
            <br><br>
            <tr>
                <td style="text-align:center;float:left; width:100%;background-color:#9de0ad;border-radius:15px;border:dashed 1px;margin-top:5%;"><br>
                    <legend class="tituloC"><b> Parque Tibanica </b></legend><br>
                    <img src="Imagenes/Parque.jpg" alt="parque" class="image" style="border-radius:10%;width:20%;height:180px;float:left;margin-left:2%;margin-right:2%;">
                    <p class="contenido" style="margin-top: 3%;text-align:left;"> Parque ubicado en el barrio San Mateo - Soacha. Este parque cuenta con una gran cantidad de pasto, cuenta con canchas de tenis, futbol y baloncesto. Tambien cuenta con una edificacion para eventos y zonas recreativas para hacer ejercicio, tanto para adultos como para niños. <br>
                    <a href="?controlador=pagina&accion=tibanica" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br><br>
                    <p style="text-align:left;margin-left:2%;margin-top:1%;font-size:12px;">Imagen tomada de <a href="https://periodismopublico.com/nuevo-campo-sintetico-de-futbol-para-la-comuna-cinco-de-soacha/cancha-tibanica-soacha-1" target="blank"> periodismopublico.com </a></p>
                </td>
            </tr>
            <br><br>
            <tr>
                <td style="text-align:center;float:left; width:100%;background-color:#9de0ad;border-radius:15px;border:dashed 1px;margin-top:5%;"><br>
                    <legend class="tituloC"><b> Polideportivo Compartir </b></legend><br>
                    <img src="Imagenes/Polideportivo.jpg" alt="parque" class="image" style="border-radius:10%;width:20%;height:180px;float:left;margin-left:2%;margin-right:2%;">
                    <p class="contenido" style="margin-top: 3%;text-align:left;"> Parque que se encuentra ubicado en el barrio Compartir - Soacha. Este parque cuenta con gran cantidad de pasto, cuenta con diversas canchas deportivas y una gran pista de patinaje. Tambien cuenta con zonas recreativas para adultos o niños. <br>
                    <a href=".?controlador=pagina&accion=Poli" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br><br>
                    <p style="text-align:left;margin-left:2%;margin-top:1%;font-size:12px;">Imagen tomada de <a href="https://periodismopublico.com/en-soacha-se-entrega-primera-pista-profesional-de-patinaje" target="blank"> periodismopublico.com </a></p></td>
            </tr>
        </table>
    </section><br><br><br><br><br><br>