<h1>Agregar Usuarios</h1>

<form method="post">
    
    <input type="text" placeholder="Nombre" name="nombreCreate" required>

    <input type="password" placeholder="Contraseña" name="passwordCreate" required>

    <input type="email" placeholder="Email" name="emailCreate" required>

    <input type="submit" value="Enviar">

</form>

<?php

$datos = new Controladores;
$datos->createControladores();

?>
