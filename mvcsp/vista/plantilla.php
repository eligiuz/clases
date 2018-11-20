<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administracion de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <header>
        <h1>Administración de Usuarios</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php?action=inicio">Inicio</a></li>
            <li><a href="index.php?action=insertar">Insertar</a></li>
            <li><a href="index.php?action=ver">Ver</a></li>
            <li><a href="index.php?action=accesar">Accesar</a></li>
            <li><a href="index.php?action=salir">Salir</a></li>
        </ul>
    </nav>
    <section>
        <?php 

        $mvc = new Controladores;
        $mvc->enlacePaginaControladores();

         ?>
    </section>
    
</body>
</html>
