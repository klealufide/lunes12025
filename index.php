<!DOCTYPE html>
<html>

<head>
    <title>Semana 06</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Semana 06</h1>
    <?php
    echo "<h2>Clases de php </h2>";

    $nombre = "Karol Leal";
    $edad = 35;
    $esEstudiante = false;

    echo "<h3>" . $nombre . "</h3>" . $edad;

    //$edad = "treintÁ y &nbsp;&nbsp;&nbsp; <br><br><br><br>cinco<br>";
    // echo $edad;

    $edadMayor = 18;
    $espacio = "<br>";
    echo $espacio;
    if ($edadMayor <= $edad) {
        echo "Es mayor de edad" . $espacio;
    }

    if ($edadMayor <= $edad) {
        echo "Es mayor de edad" . $espacio;
    } else {
        echo "Es menor de edad" . $espacio;
    }

    if ($edadMayor <= $edad) {
        echo "Es mayor de edad" . $espacio;
    } elseif ($edad ==  $edadMayor) {
        echo "Tiene 18 ahnos" . $espacio;
    } else {
        echo "Es menor de edad" . $espacio;
    }

    $semaforo = "verde";

    switch ($semaforo) {
        case 'rojo':
            echo "Detangase!";
            break;
        case 'amarillo':
            echo  "Con cuidado!";
            break;
        case 'verde':
            echo "Siga!";
            break;
        default:
            echo "color no encontrado!";
            break;
    }

    $a = 5;
    $b = "5";

    echo $espacio;
    // comparar solo valor 

    if ($a ==  $b) {
        echo "El valor de a y b es igual" . $espacio;
    }

    if ($a === $b) {
        echo "El valor y tipo de a y b es igual" . $espacio;
    }

    if ($a != $b) {
        echo "Los valores de a y b son diferentes" . $espacio;
    }

    if ($a !== $b) {
        echo "el valor o el tipo son diferentes" . $espacio;
    }

    $edad = "8";

    if ($edad < $edadMayor) {
        echo "Es menor de edad";
    }

    if ($edad >= $edadMayor) {
        echo "Es mayor de edad";
    }

    $membresia = false;

    if ($membresia && $edad >= $edadMayor) {
        echo "Es adulto con membresia" . $espacio;
    } elseif ($membresia && $edad < $edadMayor) {
        echo "Es menor de edad con membresia" . $espacio;
    } else {
        if ($edad >= $edadMayor) {
            echo "Es adulto sin membresia" . $espacio;
        } else {
            echo "Es menor de edad sin membresia" . $espacio;
        }
    }

    if ($membresia || $edad < $edadMayor) {
        echo "Tiene membresia o es menor edad" . $espacio;
    } else  {
         echo "No tiene membresia o no es menor edad" . $espacio;
    }

    if(!$membresia){
        echo "La persona tiene membresia" . $espacio;
    }
    ?>
</body>

</html>