$(function () {
    let tituloJS = document.getElementById("titulo");
    console.log(tituloJS);

    let tituloJquery = $("#titulo");
    tituloJquery.text("Semana 10 - Unidad 6");
    console.log(tituloJquery);

    let selectorClass = $(".grupo2");

    console.log(selectorClass);

    let selectorElemento = $("h3");

    console.log(selectorElemento);

    let hijosID = $("#listaTareas > li");

    hijosID.html("<b>li</b>")
    console.log(hijosID);

    let selectorMultiple = $(".grupo2, #titulo, li");

    console.log(selectorMultiple);
    /*
    document.getElementById("btnSaludo").addEventListener("click",function(){

    })
*/
    $("#btnSaludo").on("click", function () {
        alert("Hola a todos!.");
    });
});