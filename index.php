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


    ?>
</body>

</html>