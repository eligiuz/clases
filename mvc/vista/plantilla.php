<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Administración de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>Administración de Usuarios</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?action=agregar">Agregar</a></li>
            <li><a href="index.php?action=ver">Ver</a></li>
            <li><a href="index.php?action=borrar">Borrar</a></li>
            <li><a href="index.php?action=actualizar">Actualizar</a></li>
        </ul>
    </nav>
    <section>

        <?php 

        $mvc = new Controladores();
        $mvc->enlazarPagina();


         ?>
        
    </section>
    
</body>
</html>
