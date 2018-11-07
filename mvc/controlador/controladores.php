<?php

class Controladores{

    public function mostrarPagina(){

        include "vista/plantilla.php";

    }

    public function enlazarPagina(){

        if(isset($_GET["action"])){

            $paginaControlador = $_GET["action"];

        } else {

            $paginaControlador = "index";

        }

        $respuesta = Modelos::enlazarPaginaModelo($paginaControlador);

        include "$respuesta";

    }

}
