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

if (isset($_POST['registro'])) {  
    $programa = $database->prepare("INSERT INTO usuarios_natu (Nombres, Apellidos, Fecha_Nacimiento, Telefono, Correo, Contraseña) 
    VALUES (?,?,?,?,?,?)");
    $ejecucion= $programa -> execute([$nomb, $apelli, $date, $tele, $correo, $contraseña]);

    if ($ejecucion === True) {
        echo "Se insertaron exitosamente los datos";
        header ('Location: ../Index.php');
    }else{
        echo 'Hubo un error en la insercion, Intente nuevamente';
    }
}

?>