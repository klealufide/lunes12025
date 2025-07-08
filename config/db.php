<?php

$server = "localhost";
$username = "root";
$password = "root";
$database = "matricula";


$conn = new mysqli($server, $username, $password, $database);


if ($conn->connect_error) {
    echo "Error de conexion";
} else {
     echo "Conexion OKAY";
}
