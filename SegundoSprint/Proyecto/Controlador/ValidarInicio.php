<?php

include ('Modelo/Sesion.php');

if (isset($_POST['entrar'])) {
     $correo=$_POST['Correo'];
     $contraseña=$_POST['Contra'];

     $people=new Inicio($correo,$contraseña);
     $people->InicioSesion();
}

?>