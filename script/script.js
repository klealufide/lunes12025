$(function () {
    let tituloJS = document.getElementById("titulo");
    console.log(tituloJS);


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
        let tituloJquery = $("#titulo");
        tituloJquery.text("Semana 10 - Unidad 6");
        console.log(tituloJquery);
        //tituloJquery.css("color", "red");
        tituloJquery.css("fontSize", "20px");
        tituloJquery.addClass("grupo3");

        $(".grupo2").removeClass("grupo2");
    });


    $("#btnEnviar").on("click", function () {
        let nombre = $("#name").val();
        if (nombre == "") {
            $("#name").addClass("error");
        } else {
            $("#name").removeClass("error");
        }
    });

    $("img").on("mouseenter", function () {
        $("img").attr("src", "img/img1.jpg")
    });

    $("img").on("mouseleave", function () {
        $("img").attr("src", "img/biblioteca.jpg")
    });

    $("#mostrar").on("click", function () {
        $("#cuadrado").fadeIn(2000);
    });
    $("#desvanecer").on("click", function () {
        $("#cuadrado").fadeOut(2000);
    });
    $("#crecer").on("click", function () {
        $("#cuadrado").animate({
            width: '200px',
            height: '200px',
            opacity: 0.5
        });
    });
    $("#original").on("click", function () {
        $("#cuadrado").animate({
            width: '100px',
            height: '100px',
            opacity: 1
        });
    });
});