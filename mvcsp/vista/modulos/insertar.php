<h1>Insertar</h1>

<form method="post">
    
    <label for="nombreInsertar">Nombre de Usuario</label>
    <input type="text" name="nombreInsertar" id="nombreInsertar" placeholder="Nombre de usuario" required>

    <label for="passwordInsertar">Contraseña de Usuario</label>
    <input type="password" name="passwordInsertar" id="passwordInsertar" placeholder="Contraseña de usuario" required>

    <label for="emailInsertar">Correo electrónico de Usuario</label>
    <input type="email" name="emailInsertar" id="emailInsertar" placeholder="Correo electrónico de usuario" required>

    <input type="submit" value="Insertar">
    
</form>

<?php 

    $mvcInsertar = new Controladores;
    $mvcInsertar->insertarUsuarioControladores();

    if (isset($_GET["action"])) {
            if ($_GET["action"] == "ok") {
                echo "Registro exitoso";
            }
        }    

?>
