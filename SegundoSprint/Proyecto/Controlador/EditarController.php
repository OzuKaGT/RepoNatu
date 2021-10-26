<?php 

if (!isset($_POST['oculto'])){
    header('Location: ../Vista/Editar.html');
}

include ('../Modelo/Conexion.php');
$id2= $_POST['idSoli'];
$names2= $_POST['nombres2'];
$lnames2= $_POST['apellidos2'];
$mail2= $_POST['correo2'];
$pe2= $_POST['petic2'];

$sentencia= $db->prepare("UPDATE solicitud SET Nombres=?, Apellidos=?, Correo=?, Peticion=? WHERE IdSoli = ?");
$resultado= $sentencia->execute([$names2, $lnames2, $mail2, $pe2, $id2]);

if ($resultado === True) {
    echo "Se actualizaron los datos";
    echo "<meta http-equiv='refresh' content='2; url=../Vista/Buscar.php'>";
}else{
    echo 'Hubo un error en la insercion, Intente nuevamente';
}

?>