<?php
require_once '../models/Usuario.php';

$accion =  $_POST["action"];

switch ($accion) {
    case 'login':
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
        break;
    case 'register':
        $data["usuario"] = $_POST["usuario"];
        $data["clave"] = password_hash($_POST["clave"], PASSWORD_BCRYPT);
        $data["nombre"] = $_POST["nombre"];
        $data["rol"] = $_POST["rol"];

        $resultado = Usuario::register($data);

        if ($resultado) {
            header("Location: ../../index.php");
        } else {
            echo "Error al registrarse";
        }
        break;
}
