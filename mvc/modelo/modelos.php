<?php
require "BD.php";

class Modelos extends BD2{

    public static function enlazarPaginaModelo($paginaModelo){

        if($paginaModelo == "inicio" || $paginaModelo == "agregar" || $paginaModelo == "ver" || $paginaModelo == "borrar" || $paginaModelo == "actualizar"){

            $modulo = "vista/modulos/" . $paginaModelo . ".php";

        } else {

            $modulo = "vista/modulos/inicio.php";

        }

        return $modulo;

    }

    public function __construct(){

        $this->db_name ='escuela';

    }

    public function create(){

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }

}
