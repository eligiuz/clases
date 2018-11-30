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

    public function createControladores(){

        if(isset($_POST["nombreCreate"])){

            $datosControladores = array('nombre' => $_POST["nombreCreate"], 'password' => $_POST["passwordCreate"], 'email' => $_POST["emailCreate"]);

            $respuesta = Usuarios_model::create($datosControladores, "usuarios");

            if($respuesta == "ejecutado"){

                header("location:index.php?action=ok");

            } else {

                header("location:index.php");

            }

        }

    }


}
