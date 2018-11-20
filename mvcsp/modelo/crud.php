<?php

require "Conectar.php";

class CRUD extends Conectar{

    public function insertarUsuarioModelo($datosModelo,$tabla){

        $stmt = Conectar::conexion()->prepare("INSERT INTO $tabla (nombre,password,email) VALUES (:nombre, :password, :email)");

        $stmt->bindParam(':nombre', $datosModelo["nombre"]);
        $stmt->bindParam(':password', $datosModelo["password"]);
        $stmt->bindParam(':email', $datosModelo["email"]);

        if($stmt->execute()){

            return "ejecutado";

        } else {

            return "error";

        }


    }

}
