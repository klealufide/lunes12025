<?php
require_once '../../config/db.php';

class Usuario
{
    public static function login($usuario): array
    {
        global $conn;

        try {
            $sql = "SELECT * FROM usuario where usuario = '$usuario'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener usuarios: " . $e->getMessage()];
        }
    }


    public static function register($data): bool
    {
        global $conn;

        try {
            $sql = "INSERT INTO usuarios( usuario, nombre, rol, clave) VALUES ('" . $data["usuario"] . "','" . $data["nombre"] . "','" . $data["rol"] . "','" . $data["clave"] . "')";
            if ($conn->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }

        } catch (mysqli_sql_exception $e) {
            return -1;
        }
    }
}
