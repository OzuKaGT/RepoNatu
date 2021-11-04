<?php 

if (!isset($_POST['oculto'])){
    exit();
}

include ('../Modelo/Conectar.php');
$nomb=$_POST['nombre'];
$ubi=$_POST['ubicacion'];
$content=$_POST['descrip'];
$img=$_POST['image'];

if (isset($_POST['registro'])) {          
    $zonaA = $database->prepare("INSERT INTO zonas_artificiales_natu (Nombre, Ubicacion, Descripcion, Imagen) 
    VALUES (?,?,?,?)");
    $lanzamiento= $zonaA -> execute([$nomb, $ubi, $content, $img]);


    if ($lanzamiento === True) {
        echo "<meta http-equiv='refresh' content='3; url=../Index.php'>";

        echo "Se agrego todo correctamente// Redirigiendo ....";
    }else{  
        echo 'Hubo un error en la insercion, Intente nuevamente';
    }
}

?>