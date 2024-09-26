<?php

$sql = "CREATE DATABASE IF NOT EXISTS clase;
use clase;
CREATE TABLE IF NOT EXISTS datos(
    id int auto_increment primary key,
    nombre varchar(255),
    edad int
);";

$conexion = new mysqli("localhost", "root", "contra123");
$conexion->query($sql);
$conexion->close();
echo "Ya deberiamos tener la BD";