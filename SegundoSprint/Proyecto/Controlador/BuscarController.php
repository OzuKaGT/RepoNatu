<?php 

include '../Modelo/Conexion.php';

$sentencia = $db->query("CALL mostrar_solicitudes");
$solicitudes = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>