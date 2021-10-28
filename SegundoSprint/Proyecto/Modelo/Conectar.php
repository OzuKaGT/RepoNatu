<?php 

$pass='';
$user='root';
$nombredb='natupoints2';

try {
    $database= new PDO(
        'mysql:host=127.0.0.1;dbname='.$nombredb,
        $user,
        $pass
    );
} 
catch (Exception $e) {
    echo 'Error de conexion'.$e->getMessage();
}

?>