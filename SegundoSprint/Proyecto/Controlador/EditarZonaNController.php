<?php 

if (!isset($_POST['oculto'])){
    header('Location: ../Vista/ConsultaZonaN.php');
}

include ('../Modelo/Conectar.php');
$nomb=$_POST['nombre'];
$ubi=$_POST['ubicacion'];
$content=$_POST['descrip'];
$img=$_POST['image'];
$id2=$_POST['idzonaN'];

$sentencia= $database->prepare("UPDATE zonas_naturales_natu SET Nombre=?, Descripcion=?, Ubicacion=?, Imagen=? WHERE ID_ZonaNA = ?");
$resultado= $sentencia->execute([$nomb, $ubi, $content, $img, $id2]);

if ($resultado === True) {
    echo "Se actualizaron los datos";
    echo "<meta http-equiv='refresh' content='2; url=../Vista/ConsultaZonaN.php'>";
}else{
    echo 'Hubo un error en la actualizacion, Intente nuevamente';
}

?>