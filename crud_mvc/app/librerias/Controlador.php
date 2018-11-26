<?php

/* Clase controlador principal. Se encarga de cargar los modelos y las vistas */

class Controlador{
    //Cargar modelo
    public function modelo($modelo){
        //carga
        require_once '../app/modelos/' . $modelo . '.php';
        //Instanciar el modelo

        return new $modelo();
    }

    public function vista($vista, $datos = []){
        //Revisar si el archivo vista existe
        if (file_exists('../app/vistas/' . $vista . '.php')) {
            require_once '../app/vistas/' . $vista . '.php';
        } else {
            // si el archivo de la vista no existe
            die('La vista no existe');
        }
        
    }

}
