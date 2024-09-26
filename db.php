<?php

/* $sql = "CREATE DATABASE IF NOT EXISTS clase;
use clase;
CREATE TABLE IF NOT EXISTS datos(
    id int auto_increment primary key,
    nombre varchar(255),
    edad int
);"; */

$conexion = new mysqli("localhost", "root", "contra123", "clase");

$sql = "INSERT INTO datos (nombre,edad) values ('Juan',30),('Pedro',54),('Marcos',74)";

$conexion->query($sql);
$conexion->close();
echo "Ya deberiamos tener la BD con datos";