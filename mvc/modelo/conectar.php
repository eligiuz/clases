<?php 
abstract class Conectar{

    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = 'root';
    protected $db_name = 'escuela';
    private static $charset = 'utf8';
    private $conn;
    protected $query;
    protected $rows = array();

    //Métodos

    abstract protected function create();
    abstract protected function read();
    abstract protected function update();
    abstract protected function delete();

    //conectar base de datos

    private function conexion(){

        try {
            $conexion = new PDO("mysql:host=$host;dbname=$db_name;charset=$charset",$user,$password);

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            die("Error" . $e->getMessage());

            echo "Línea de error" . $e->getLine();
        }

        return $conexion;

    } 

}
