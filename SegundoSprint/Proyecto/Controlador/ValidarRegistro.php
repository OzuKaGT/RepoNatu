<?php
include_once ("../Modelo/Registrar.php");

if (isset($_POST['registro'])) {
     $nomb=$_POST['nombres'];
     $apelli=$_POST['apellidos'];
     $date=$_POST['fecha'];
     $tele=$_POST['numb'];
     $correo=$_POST['email'];
     $contraseña=md5($_POST['pass']);

     $people=new Persona($nomb, $apelli, $date, $tele, $correo, $contraseña);
     $people->adUsuario();
}




?>