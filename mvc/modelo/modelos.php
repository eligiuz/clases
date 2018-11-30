<?php

class Modelos{

    public static function enlazarPaginaModelo($paginaModelo){

        if($paginaModelo == "inicio" || $paginaModelo == "agregar" || $paginaModelo == "ver" || $paginaModelo == "borrar" || $paginaModelo == "actualizar"){

            $modulo = "vista/modulos/" . $paginaModelo . ".php";

        } elseif ($paginaModelo == "ok") {

            $modulo = "vista/modulos/agregar.php";
            
        } else {

            $modulo = "vista/modulos/inicio.php";

        }

        return $modulo;

    }

}
