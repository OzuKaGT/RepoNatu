<?php 

include '../Modelo/Conectar.php';

$sentencia = $database->query("SELECT * FROM zonas_naturales_natu");
$solicitudes = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>