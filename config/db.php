<?php

$server = "localhost";
$username = "root";
$password = "root";
$database = "matricula";


$conn = new mysqli($server, $username, $password, $database);

$espacio = "<br>";

if ($conn->connect_error) {
    die("Error de conexion");
} else {
    echo "Conexion OKAY" . $espacio;
}

/*
$sql = "INSERT INTO usuario( usuario, nombre, rol) VALUES ('trojas','Tatiana','admin')";

if ($conn->query($sql) === TRUE) {
    echo "Registro se agrego correctamente al usuario" . $espacio;
} else {
    echo "Error al agregar al usuario".$conn->error . $espacio;
}
    */

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["usuario"] . " - " . $row["nombre"] . " - " . $row["rol"] . $espacio;
    }
} else {
    echo "No se encontraron datos " . $espacio;
}


$sql = "UPDATE usuario SET nombre = 'Karol'  where id=1";
if ($conn->query($sql) === TRUE) {
    echo "Registro se actualizo correctamente al usuario" . $espacio;
} else {
    echo "Error al actualizar al usuario" . $conn->error . $espacio;
}


$sql  = "DELETE FROM usuario where id=3";
if ($conn->query($sql) === TRUE) {
    echo "Se elimino correctamente al usuario" . $espacio;
} else {
    echo "Error al eliminar al usuario" . $conn->error . $espacio;
}