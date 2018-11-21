<?php

class Usuarios extends Controller{

    function __construct(){

        parent::__construct();
        

    }

    public function index(){

       $viewUsuarios = new Views("Usuarios/usuarios.php", 2);

    }

    public function getUsuarios(){

        $usuarios = array("josé", "pedro", "carlos");
        $listaUsuarios = new Views("usuarios/listarUsuarios.html", compact("usuarios"));

    }

}
