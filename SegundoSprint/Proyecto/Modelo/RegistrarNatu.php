<?php 

include ('Conexion.php');

class Natu{

    private $name;
    private $ubica;
    private $desc;
    private $imag;

    public function __construct($name, $ubica, $desc, $imag){
        
        $this->name=$name;
        $this->ubica=$ubica;
        $this->desc=$desc;
        $this->imag=$imag;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getName($name){
        return ($this->name);
    }

    public function setUbica($ubica){
        $this->ubica=$ubica;
    }

    public function getUbica($ubica){
        return ($this->ubica);
    }

    public function setDesc($desc){
        $this->desc=$desc;
    }

    public function getDesc($desc){
        return ($this->desc);
    }

    public function setImag($imag){
        $this->imag=$imag;
    }

    public function getImag($imag){
        return ($this->imag);
    }

    public function adNatural(){
        
        $m=new jamon();
        $reg="INSERT INTO zonas_naturales_natu (Nombre,               Ubicacion,             Descripcion,             Imagen) 
                                VALUES    ('$this->name',        '$this->ubica',        '$this->desc',           '$this->imag')";

        $m->query($reg);
        if($m==TRUE){
            echo "<meta http-equiv='refresh' content='4; url=../Index.php'>";
            echo "La zona fue registrada correctamente... Redirigiendo en 4 segundos";
        }else {
            echo "La zona no se registro .... Revise ";
        }
    }
}
?>