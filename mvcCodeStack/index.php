<?php

require "core/Controller.php";
require "core/Config.php";
require "core/views.php";
require "core/Model.php";
require "core/loadModel.php";

if($_GET && isset($_GET["controller"])){

    $default_controller = $_GET["controller"];

    if (file_exists("controllers/" . $default_controller . ".php")) {
        require "controllers/" . $default_controller . ".php";
    } else {
        die("Controlador no encontrado");
    }
    
} else {

    if (file_exists("controllers/" . $default_controller . ".php")) {
        require "controllers/" . $default_controller . ".php";
    } else {
        die("Controlador no encontrado");
    }

}

$Codestack = new $default_controller();
