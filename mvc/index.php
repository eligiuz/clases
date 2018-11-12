<?php
require_once "controlador/controladores.php";
require_once "modelo/crud.php";
require_once "modelo/modelos.php";

$mvc = new Controladores;
$mvc->mostrarPagina();
