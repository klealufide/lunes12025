    <a href="index.php">Ir a index</a>
<a href="logout.php">Cerrar sesion</a>
    <?php

    session_start();

    if($_SESSION["rol"] == "admin"){

        echo "Eres administrador";
    } else {
        echo "Eres estudiante";
    }