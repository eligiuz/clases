<?php

class Modelos{

    public static function enlacePagianModelo($enlace){

        if($enlace == "inicio" ||$enlace == "ver" || $enlace == "insertar" || $enlace == "accesar" || $enlace == "salir"){

            $dato = "vista/modulos/$enlace.php";

        } elseif ($enlace = "ok"){

            $dato = "vista/modulos/insertar.php";
        
        } else {

            $dato = "vista/modulos/inicio.php";

        }

        return $dato;

    }

}
