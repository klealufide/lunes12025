document.addEventListener("DOMContentLoaded", function () {
    var x = 10;
    let y = 20.9053534534;

    let nombre = "Karol Leal Rojas";
    let edad = 25;

    console.log("Tamanno de cadena: " + nombre.length);
    console.log("Posicion4: " + nombre.charAt(0));
    console.log("Temina en Leal?: " + nombre.endsWith("Leal"));
    console.log("Reemplazo todas las o por 0?: " + nombre.replaceAll("o", "0"));
    console.log("Extraiga del 0 al 5: " + nombre.slice(-5));
    let esEstudiante = false; // global

    let total = 50;

    sumar(4, 5);

    console.log(x);
    console.log(x.toString());
    console.log(y.toFixed(1));
    console.log(esEstudiante.toString());

    console.log("Hola mundo!");

    function sumar(a, b) {
   /* let */ total = a + b;
        console.log("Ambito local " + total);
    }

    console.log("Ambito global " + total);

    let esMayorEdad = edad >= 18 ? true : false;
    let esMayorEdadDescriptivo = edad >= 18 ? "Es mayor a 18 annos" : "Es menor de edad";
    console.log(esMayorEdad);
    console.log(esMayorEdadDescriptivo);

    if (edad >= 18) {
        console.log("Es mayor edad");
    } else {
        console.log("es menor de edad");
    }
    let semaforo = "morado";

    if (semaforo == "rojo") {
        console.log("Detengase");
    } else if (semaforo == "amarillo") {
        console.log("Precaucion");
    } else if (semaforo == "verde") {
        console.log("Siga!");
    } else {
        console.log("Color no definido");
    }

    switch (semaforo) {
        case 'rojo':
            console.log("Detengase");
            break;
        case 'amarillo':
            console.log("Precaucion");
            break;
        case 'verde':
            console.log("Siga!");
            break;

        default:
            console.log("Color no definido");
            break;
    }

    for (let i = 0; i < 10; i++) {
        console.log(i);
    }

    for (let i = 1; i <= 10; i++) {
        console.log("Tabla de " + i + " x 4 = " + (i * 4));
    }

    let arregloFrutas = ["pera", "mango", "melon"];

    for (let i = 0; i < arregloFrutas.length; i++) {
        console.log(arregloFrutas[i]);
    }

    for (let posicion in arregloFrutas) {
        console.log(arregloFrutas[posicion]);
    }


    // tiene que cumplir para entrar a la logica
    while (edad < 30) {
        console.log("edad es menor a 30");
        edad = edad + 10;
        console.log("edad while " + edad);
    }
    // al menos una vez
    do {
        edad = edad + 10;
        console.log("edad dowhile " + edad);
    } while (edad < 30);
    // luego ve la condicional para seguir

    /*
    let sumar = function(num1, num2){
        return num1 + num2;
    }
    
    console.log(sumar(2,4));
    */

    document.getElementById("mensaje").style.display = "none";
    document.getElementById("titulo").innerText = "Semana 05";
    document.getElementById("subtitulo").style.color = "red";

    let nuevaTarea = document.createElement("li");
    nuevaTarea.innerText = "Tarea4";
    document.getElementById("listaTarea").appendChild(nuevaTarea);

    let imagen = document.getElementById("imagen");



    imagen.addEventListener("mouseenter", function () {
        imagen.setAttribute("src", "./img/salon.jpg");
    })


    imagen.addEventListener("mouseleave", function () {
        imagen.setAttribute("src", "./img/img1.jpg");
    })

    let botonAgregar = document.getElementById("agregarTarea");

    botonAgregar.addEventListener("click", function () {
        let tarea = document.getElementById("tarea");
        if (tarea.value != "") {
            tarea.style.borderColor = "black";
            document.getElementById("mensaje").style.display = "none";
            let nuevaTarea = document.createElement("li");
            nuevaTarea.innerText = tarea.value;
            document.getElementById("listaTarea").appendChild(nuevaTarea);
            tarea.value  = "";
        } else {
            tarea.style.borderColor = "red";
            document.getElementById("mensaje").style.display = "block";
        }

    })
})


