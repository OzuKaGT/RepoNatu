<?php 

if (!isset($_POST['oculto'])){
    exit();
}

include ('../Conectar.php');
$nomb=$_POST['nombre'];
$ubi=$_POST['ubicacion'];
$content=$_POST['descrip'];
$img=$_POST['image'];

if (isset($_POST['registro'])) {          
    $zonaN = $database->prepare("INSERT INTO zonas_naturales_natu (Nombre, Ubicacion, Descripcion, Imagen) 
    VALUES (?,?,?,?)");
    $lanzamiento= $zonaN -> execute([$nomb, $ubi, $content, $img]);


    if ($lanzamiento === True) {
        echo "<meta http-equiv='refresh' content='4; url=../../?controlador=pagina&accion=inicio'>";

        echo "Se agrego todo correctamente// Redirigiendo ....";
    }else{
        echo 'Hubo un error en la insercion, Intente nuevamente';
    }
}

?>