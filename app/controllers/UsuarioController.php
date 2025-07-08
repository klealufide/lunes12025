<?php
require_once '../models/Usuario.php';



$usuario = $_POST["usuario"];
$password = $_POST["clave"];

$usuario = Usuario::login($usuario);
if (!empty($usuario)) {
    if (password_verify($password, $usuario[0]['clave'])) {
            echo "Usuario se loguea";
            header("Location: ../../bienvenido.php");
            // Sesion con la informacion
    } else {
         header("Location: ../../mensajeError.php");
    }
} else {
    echo "Usuario no existe";
}

