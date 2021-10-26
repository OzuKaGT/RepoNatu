<?php 

if (!isset($_GET['id'])){
    header ('Location: ../Vista/Buscar.php');
}

$codigo=$_GET['id'];

include '../Modelo/Conexion.php';

$sentencia=$db->prepare("DELETE FROM solicitud WHERE IdSoli = ?;");
$resultado= $sentencia->execute([$codigo]);

if ($resultado === TRUE) {
    echo "Se elimino el dato";
    header('Location: ../Vista/Buscar.php');
}else{
    echo 'Error';
}

?>