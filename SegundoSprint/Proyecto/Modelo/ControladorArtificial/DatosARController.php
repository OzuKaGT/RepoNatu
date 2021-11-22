<?php 

if (!isset($_GET['id'])){
    header ('Location: ../Vista/EditarZonaN.php');
}

include '../../modelo/Conectar.php';

$id=$_GET['id'];

$sentencia=$database->prepare("SELECT * FROM zonas_artificiales_natu WHERE ID_ZonaAR=(?);");
$sentencia->execute([$id]);
$resultado= $sentencia->fetch(PDO::FETCH_OBJ);

?>