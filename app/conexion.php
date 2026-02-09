<?php
$conexion = new mysqli(
    "db",     // nombre del servicio MySQL
    "user",
    "pass",
    "demo_db"
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
