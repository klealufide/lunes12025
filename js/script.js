var x = 10;
let y = 20.9053534534;

let nombre = "Karol Leal Rojas";

console.log("Tamanno de cadena: "+nombre.length);
console.log("Posicion4: "+nombre.charAt(0));
console.log("Temina en Leal?: "+nombre.endsWith("Leal"));
console.log("Reemplazo todas las o por 0?: "+nombre.replaceAll("o","0"));
console.log("Extraiga del 0 al 5: "+nombre.slice(-5));
let esEstudiante = false; // global

let total = 50;

sumar(4,5);

console.log(x);
console.log(x.toString());
console.log(y.toFixed(1));
console.log(esEstudiante.toString());

console.log("Hola mundo!");

function sumar(a,b){
   /* let */ total = a+b;
    console.log("Ambito local " + total);
}

console.log("Ambito global "+total);

