<?php 

include 'modelo/Conectar.php';

$sentencia = $database->query("SELECT * FROM zonas_artificiales_natu");
$solicitudes = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>