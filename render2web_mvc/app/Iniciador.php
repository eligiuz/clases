<?php

/* Cargamosa librerías */
require_once 'config/Configurar.php';


/*require_once 'librerias/Base.php';
require_once 'librerias/Controlador.php';
require_once 'librerias/Core.php';*/


//Autoload php: para cargar las clases
spl_autoload_register(function($nombreClase){
    require_once 'librerias/' . $nombreClase . '.php';
});