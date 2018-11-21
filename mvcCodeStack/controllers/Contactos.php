<?php

class Contactos extends Controller{

    function __construct(){

        parent::__construct();
        

    }

    public function index(){

        $loader = new LoadModel("ContactosModel");
        $contactosModel = new ContactosModel();
        $Contactos = $contactosModel->getContactos();
        $viewContactos = new Views("Contactos/index.php", compact("Contactos"));

    }

}
