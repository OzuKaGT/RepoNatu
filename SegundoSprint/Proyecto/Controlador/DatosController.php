<?php 

if (!isset($_GET['id'])){
    header ('Location: ../Vista/Editar.php');
}

include '../Modelo/Conexion.php';

$id=$_GET['id'];

$sentencia=$db->prepare("CALL mostrar_una_soli (?);");
$sentencia->execute([$id]);
$resultado= $sentencia->fetch(PDO::FETCH_OBJ);

?>