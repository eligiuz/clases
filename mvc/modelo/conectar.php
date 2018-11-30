<?php 
class Conectar{

    public $host = 'localhost';
    public $user = 'root';
    public $password = 'root';
    public $db_name = 'escuela';
    public $charset = 'utf8';
    public $conn;
    public $query;
    public $rows = array();

    //Métodos

    //conectar base de datos

    static public function conexion(){

        try {
            $conexion = new PDO("mysql:host={$host};dbname={$db_name};charset=$charset",$user,$password);

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            die("Error" . $e->getMessage());

            echo "Línea de error" . $e->getLine();
        }

        return $conexion;

    } 

}
