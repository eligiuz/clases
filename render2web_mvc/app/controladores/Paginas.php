<?php

class Paginas extends Controlador{
    public function __construct(){
        //echo "Controlador páginas cargado";
    }

    public function index(){
        $this->vista('paginas/Inicio');
    }

    public function articulo(){

    }

    public function actualizar($num_registro){
        echo $num_registro;
    }

}
