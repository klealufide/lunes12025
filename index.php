<?php
include('./config/db.php');
//include('./app/controllers/UsuarioController.php');
// HASHING DE CONTRASENNAS
/*
$clave = "queso1234";
echo $clave . $espacio;

//$hash = password_hash($clave, PASSWORD_BCRYPT);

//echo $hash.$espacio;

$hash = '$2y$10$xf9/OVvGg3iyQIo16I2n4uDyjWOMDZ5Ob4.9LnOxwZodWE0lm8TYa';

if (password_verify($clave, $hash)) {
    echo "La contrasenna es valida" . $espacio;
} else {
    echo "La contrasenna es incorrecta" . $espacio;
}
*/
?>
<form action="./app/controllers/UsuarioController.php" method="POST">
    <input id="usuario" name="usuario" placeholder="Usuario">
    <input id="clave" name="clave" placeholder="Clave">
    <button type="submit">Enviar</button>
</form>

