<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo NOMBRESITIO ?></title>
</head>
<body>


    <div class="container">
        <nav class="navbar navar-toggleable-lg navbar-invrse bg-inverse mb-3"></nav>
        <button class="navbar-tooggle navbar-toggler-right" type="button" data-toggle="collapse" data-target="navbarExampleDefault" aria-controls="navbarExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>
        <a href="<?php echo RUTA_URL ?>" class="navabr-brand">CRUD MVC - eligio</a>
        <div class="collapse" id="navbarsExmapleDefault">
            <ul class="navbar mr-auto">
                <li class="nav-item float-right">
                    <a class="nav-link" href="paginas/agregar">Insertar</a>
                </li>
            </ul>
        </div>
    </div>