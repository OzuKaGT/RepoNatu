<?php 

if (!isset($_GET['id'])){
    header ('Location: ../Vista/EditarZonaN.php');
}

include_once ("../../modelo/Conectar.php");

$id=$_GET['id'];

$sentencia=$database->prepare("SELECT * FROM zonas_naturales_natu WHERE ID_ZonaNA=(?);");
$sentencia->execute([$id]);
$resultado= $sentencia->fetch(PDO::FETCH_OBJ);

?>