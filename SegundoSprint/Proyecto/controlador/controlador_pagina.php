<?php

class ControladorPagina{
    public function inicio(){
        include_once("vistas/paginas/inicio.php");
    }
    public function Neuta(){
        include_once("vistas/paginas/Neuta.php");
    }
    public function Tibanica(){
        include_once("vistas/paginas/Tibanica.php");
    }
    public function TierraB(){
        include_once("vistas/paginas/TierraB.php");
    }
    public function Poli(){
        include_once("vistas/paginas/Poli.php");
    }
    public function RegistrarUsuario(){
        include_once("vistas/paginas/RegistrarUsuario.php");
    }
}

?>