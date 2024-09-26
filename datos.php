<?php
header("Content-Type: application/json");
$conexion = new mysqli("localhost", "root", "contra123", "clase");

$sql = "SELECT id, nombre, edad FROM datos";
$r = $conexion->query($sql);
$datos = [];
while ($fila = $r->fetch_assoc()) {
    $datos[] = $fila;
}
echo json_encode($datos);
