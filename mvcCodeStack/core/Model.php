<?php

class Model{
    public $db = null;

    function __construct(){

            try {

                $this->db = $this->getConnection();
                
            } catch (PDOException $ex) {
                die("No se puede conectar  a la base de datos " . $ex->getMessage());
            } 

    }

    private function getConnection(){

            $host = "localhost";
            $user = "root";
            $pass = "";
            $database = "codestack";
            $charset = "utf8";
            $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            $pdo = new PDO("mysql:{$host};dbname={$database};charset{$charset}",$user, $pass, $opt);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

    }

}
