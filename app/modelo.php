<?php
require_once "conexion.php";

function crearTabla() {
    global $conexion;
    $conexion->query("
        CREATE TABLE IF NOT EXISTS productos (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100)
        )
    ");
}

function insertarProductos() {
    global $conexion;
    $res = $conexion->query("SELECT COUNT(*) AS total FROM productos");
    $row = $res->fetch_assoc();

    if ($row['total'] == 0) {
        $conexion->query("
            INSERT INTO productos (nombre) VALUES
            ('Hamburguesa'),
            ('Pizza'),
            ('Perro caliente')
        ");
    }
}

function obtenerProductos() {
    global $conexion;
    return $conexion->query("SELECT * FROM productos");
}

function registrarProducto($nombre) {
    global $conexion;
    $stmt = $conexion->prepare("INSERT INTO productos (nombre) VALUES (?)");
    $stmt->bind_param("s", $nombre);
    $stmt->execute();
}
