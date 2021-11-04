<?php 

if (!isset($_GET['id'])){
    header ('Location: ../Vista/ConsultaZonaN.php');
}

$codigo=$_GET['id'];

include '../Modelo/Conectar.php';

$sentencia=$database->prepare("DELETE FROM zonas_artificiales_natu WHERE ID_ZonaAR = ?;");
$resultado= $sentencia->execute([$codigo]);

if ($resultado === TRUE) {
    echo "Se elimino el dato";
    echo "<meta http-equiv='refresh' content='3; url=../Vista/ConsultaZonaN.php'>";
}else{
    echo 'Error';
}

?>