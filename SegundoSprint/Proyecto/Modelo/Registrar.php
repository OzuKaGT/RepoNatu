<?php 

include_once ('Conectar.php');

class Persona{

    private $names;
    private $lnames;
    private $fecha;
    private $tel;
    private $corre;
    private $contra;

    public function __construct($names, $lnames, $fecha, $tel, $corre, $contra){
        
        $this->names=$names;
        $this->lnames=$lnames;
        $this->fecha=$fecha;
        $this->tel=$tel;
        $this->corre=$corre;
        $this->contra=$contra;
    }

    public function setNames($names){
        $this->names=$names;
    }

    public function getNames($names){
        return ($this->names);
    }

    public function setLnames($lnames){
        $this->lnames=$lnames;
    }

    public function getLnames($lnames){
        return ($this->lnames);
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function getFecha($fecha){
        return ($this->fecha);
    }
    
    public function setTel($tel){
        $this->tel=$tel;
    }

    public function getTel($tel){
        return ($this->tel);
    }

    public function setCorre($corre){
        $this->corre=$corre;
    }

    public function getCorre($corre){
        return ($this->corre);
    }

    public function setContra($contra){
        $this->contra=$contra;
    }

    public function getContra($contra){
        return ($this->contra);
    }

    public function adUsuario(){
        
        // $m=new CONEXION();
        // $reg="INSERT INTO usuarios_natu (Nombres, Apellidos, Fecha_Nacimiento, Telefono, Correo, Contraseña)  
        // VALUES ('$this->names', '$this->lnames','$this->fecha', '$this->tel', '$this->corre', '$this->contra')";

        $m->query($reg);
        if($m==TRUE){
            echo "<meta http-equiv='refresh' content='4; url=../Index.php'>";
            echo "El usuario fue registrado correctamente... Redirigiendo en 4 segundos";
        }else {
            echo "El usuario no se registro .... Revise ";
        }
    }
}
?>