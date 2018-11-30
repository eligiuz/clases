<?php
require_once "conectar.php";

/**
 * Usuarios model
 */
class Usuarios_model extends Conectar
{

    static public function create($datosModelo, $tabla){

        $stmt = Conectar::conexion()->prepare("INSERT INTO $tabla (nombre,password,email) VALUES (:nombre,:password,:email)");

        $stmt->bindParam(":nombre", $datosModelo["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModelo["password"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosModelo["email"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ejecutado";

        } else {

            return "error";

        }
        

        $stmt->close();

    }

    public function read(){

    }

    public function update(){

    }

    public function delete(){

    }
}
