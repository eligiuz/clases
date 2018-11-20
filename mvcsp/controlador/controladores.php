<?php

class Controladores{

    public function mostrarPagina(){

        include "vista/plantilla.php";

    }

    public function enlacePaginaControladores(){

        if(isset($_GET["action"])){

            $enlace = $_GET["action"];

        } else {

            $enlace ="inicio";

        }

        $resultado = Modelos::enlacePagianModelo($enlace);

        include $resultado;

    }

    public function insertarUsuarioControladores(){

        if(isset($_POST["nombreInsertar"])){
            $datosControladores = array('nombre'=>$_POST["nombreInsertar"],
                'password'=>$_POST["passwordInsertar"],
                'email'=>$_POST["emailInsertar"]);

            $respuesta = CRUD::insertarUsuarioModelo($datosControladores,"usuarios");

            if($respuesta == "ejecutado"){

                header("location:index.php?insertar");

                echo "Usuario insertado";

            } else {

                header("location:index.php?inicio");

            }

        }

    }

}
