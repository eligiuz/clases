<?php 
abstract class BD2{

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

    private function db_open(){

        $this->conn = new PDO("mysql:host=$host;dbname=$db_name",$user,$password);

    } 

}

class BD{

    public static function conectar(){
        
        try {
                $conn = new PDO("mysql:host=localhost;dbname=escuela","root","root");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    /* INSERT */

                    /*$stmt = $conn->prepare("INSERT INTO usuarios (nombre,password,email) VALUES (:nombre,:password,:email)");
                    $stmt->bindParam(':nombre',$nombre);
                    $stmt->bindParam(':password',$password);
                    $stmt->bindParam(':email',$email);
                    */

                return $conn;
            } catch (Exception $e) {

                echo "Error" . $e->getMessage();

            }    
        
    }

}
