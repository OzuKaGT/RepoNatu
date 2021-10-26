<?php 

include_once ('Conectar.php');

class Inicio{
    private $correo;
    private $clave;

    public function __construct($correo, $clave){
        $this->correo=$correo;
        $this->clave=$clave;
    }

    public function setCorreo($correo){
        $this->correo=$correo;
    }

    public function getCorreo($correo){
        return ($this->correo);
    }
    public function setClave($clave){
        $this->clave=$clave;
    }

    public function getClave($clave){
        return ($this->clave);
    }

    public function InicioSesion(){

        session_start();

        $r=new CONEXION();
        $sql="SELECT COUNT(*) as contar FROM inicio_usuario WHERE Correo='$this->correo' AND Contraseña='$this->clave'";
        $r=mysqli_query($r,$sql);
        $t=mysqli_fetch_array($r);

        if ($t['contar']>0){
            $_SESSION['user']=$this->correo;
            echo "<meta http-equiv='refresh' content='3; url=Vista/MapaIN.php'>";
            //header("location:Vista/IndexIN.php ? res=iniciado");
            echo "Sesion iniciada CORRECTAMENTE .... Redirigiendo ...";
        //die("Registro Encontrado");
        }else{  
            //echo "<meta http-equiv='refresh' content='6; url=../Index.php'>";
            echo ("Usuario y/o contraseña incorrectos... Intente nuevamente");
        }
    
    }
}



/*if(isset($_POST['Entrar'])){

    session_start();

    $Email=$_REQUEST['Correo'];
    $Clav=$_REQUEST['Contra'];

    $sql="SELECT COUNT(*) as contar FROM inicio_usuario WHERE Correo='$Email' AND Contraseña='$Clav'";

    $consulta=mysqli_query($conx,$sql);

    $lista=mysqli_fetch_array($consulta);

    if ($lista['contar']>0){

        $_SESSION['user']=$Email;
        echo "<meta http-equiv='refresh' content='2; url=Vista/IndexIN.php'>";
        echo "Sesion iniciada CORRECTAMENTE .... Redirigiendo ...";
    //die("Registro Encontrado");
    }else{  
        //echo "<meta http-equiv='refresh' content='6; url=../Index.php'>";
        echo ("Usuario y/o contraseña incorrectos... Intente nuevamente");
    }

}*/

?>