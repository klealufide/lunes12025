<!DOCTYPE html>
<html>

<head>
    <title>Semana 06</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Unidad 4</h1>
    <?php
    /*
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


    $contador = 0;

    while($contador < 5){
        echo $contador.$espacio;
        $contador++;
    }

    do{
        $contador++;
        echo $contador.$espacio;
    } while($contador < 5);

    for($i = 10; $i > 0; $i--){
        echo $i.$espacio;
    }
    */
    // segunda parte Unidad 4

    $arreglo = array("banano", "fresa");

    array_push($arreglo, "papaya", "melon");

    $posicion = array_search("melon", $arreglo);
    echo $posicion . " esta melon sin for";

    // cual es posicion de melon
    $i = 0;
    foreach ($arreglo as $item) {
        if ($item == "melon") {
            echo $i . " esta melon con for";
            break;
        }
        $i++;
    }


    print_r($arreglo);

    $persona = ["nombre" => "Karol", "apellido" => "Leal", "edad" => 35, "esEstudiante" => false];
    $persona2 = ["nombre" => "Tatiana", "apellido" => "Rojas", "edad" => 36, "esEstudiante" => false];
    print_r($persona);

    if ($persona["esEstudiante"]) {
        echo $persona["nombre"] . " es estudiante<br>";
    } else {
        echo $persona["nombre"] . " no es estudiante<br>";
    }

    $listaPersona = [$persona, $persona2];

    echo "<br><br>";
    print_r($listaPersona);

    echo $listaPersona[0]["edad"];
    echo "<br><br>";
    foreach ($listaPersona as $elementoPersona) {
        echo $elementoPersona["edad"] . "";
        if ($elementoPersona["edad"] > 35) {
            echo "La persona " . $elementoPersona["apellido"] . " tiene mas de 35 ahnos";
        }
        echo "<br><br>";
    }


    function sumar($a, $b)
    {
        echo $a + $b;
    }

    sumar(5, 6);

    $sumar1 = function ($a, $b) {
        return $a + $b;
    };
    echo "<br><br>";
    echo $sumar1(4, 5);

    $duplicar = fn($n) => $n * 2;
    echo "<br><br>";
    echo $duplicar(4);

    $saludo = "Hola Mundo!";
    echo "<br><br>";
    echo str_replace("o", "0", $saludo);

    /*
    $archivo = fopen("archivo.txt","w");
    $txt = "Hola Mundo!";

    fwrite($archivo, $txt);

    fclose($archivo);
    */

    $archivo = fopen("archivo.txt","r");

    while(!feof($archivo)){
        echo fgets($archivo)."<br>";
    }
    fclose($archivo);

    session_start();

    print_r($_SESSION);

    $_SESSION["usuario"] = "kleal";
    $_SESSION["rol"] = "admin";
    $_SESSION["esEstudiante"] = false;

    print_r($_SESSION);
    ?>
    <a href="sesion.php">Ir a sesion</a>
</body>

</html>