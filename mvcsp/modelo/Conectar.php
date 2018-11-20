<?php

class Conectar{

    static public function conexion(){

        try {

            $conexion =new PDO("mysql:host=localhost;dbname=escuela;charset=utf8","root",123456789);

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;
            
        } catch (PDOException $e) {
            echo "Error ". $e->getMessage();
        }

        $conexion = null;

        }

}



