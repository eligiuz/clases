<h1>Agregar Usuarios</h1>

<form method="post">
    <label for="nombreCreate">Nombre de Usuario</label>
    <input type="text" placeholder="Nombre" name="nombreCreate" id="nombreCreate" required>
    
    <label for="passwordCreate">Contraseña del Usuario</label>
    <input type="password" placeholder="Contraseña" name="passwordCreate" id="passwordCreate" required>

    <label for="emailCreate">Correo eletrónico del Usuario</label>
    <input type="email" placeholder="Email" name="emailCreate" id="emailCreate" required>

    <input type="submit" value="Enviar">

</form>

<?php

$datos = new Controladores;
$datos->createControladores();

if(isset($_GET["action"])){

    if ($_GET["action"] == "ok") {
        echo "Registro Exitoso";
    }

}

?>
