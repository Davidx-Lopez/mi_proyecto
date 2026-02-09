<?php
require_once "modelo.php";

crearTabla();
insertarProductos();

/* Procesar formulario */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["nombre"])) {
        registrarProducto($_POST["nombre"]);
        header("Location: index.php");
        exit;
    }
}

$productos = obtenerProductos();
