<?php 

if (!isset($_POST['oculto'])){
    header('Location: ../Vista/ConsultaZonaA.php');
}

include ('../Conectar.php');
$nomb=$_POST['nombre'];
$ubi=$_POST['ubicacion'];
$content=$_POST['descrip'];
$img=$_POST['image'];
$id2=$_POST['idzonaA'];

$sentencia= $database->prepare("UPDATE zonas_artificiales_natu SET Nombre=?, Ubicacion=?, Descripcion=?, Imagen=? WHERE ID_ZonaAR = ?");
$resultado= $sentencia->execute([$nomb, $ubi, $content, $img, $id2]);

if ($resultado === True) {
    echo "Se actualizaron los datos";
    echo "<meta http-equiv='refresh' content='2; url=../../.?controlador=crudartificial&accion=consultazonaa'>";
}else{
    echo 'Hubo un error en la actualizacion, Intente nuevamente';
}

?>