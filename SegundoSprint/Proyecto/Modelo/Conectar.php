<?php 

$pass= '';
$user='root';
$nombredb='natupoints';

try {
    $db= new PDO(
        'mysql:host=localhost;dbname='.$nombredb,
        $user,
        $pass
    );
} catch (Exception $e) {
    echo 'Error de conexion'.$e->getMessage();
}

?>