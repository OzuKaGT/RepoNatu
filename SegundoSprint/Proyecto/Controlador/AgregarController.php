<?php 

if (!isset($_POST['oculto'])){
    exit();
}

include ('../Modelo/Conectar.php');
$nomb=$_POST['nombres'];
$apelli=$_POST['apellidos'];
$date=$_POST['fecha'];
$tele=$_POST['numb'];
$correo=$_POST['email'];
$contraseña=md5($_POST['pass']);

$sentencia= $db->prepare("INSERT INTO usuarios_natu VALUES ('',?,?,?,?,?,?)");
$resultado= $sentencia->execute([$nomb, $apelli, $date, $tele, $correo, $contraseña]);

if ($resultado === True) {
    header ('Location: ../Index.html');
}else{
    echo 'Hubo un error en la insercion, Intente nuevamente';
}

?>