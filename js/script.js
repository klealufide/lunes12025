$(function () {
    $("#buscarPokemon").on("click", function () {
        let pokemon = $("#pokemon").val();
        let apiURL = "https://pokeapi.co/api/v2/";
        let endpoint = "pokemon/";
        if (pokemon != "") {
            /*
            fetch(apiURL + endpoint + pokemon)
                .then(response => response.json())
                .then(data => {
                     $("#contenido").html("<h4>" + data.name + "</h4><img src='" + data.sprites.front_default + "'>");
                $("#pokemon").val("");
                .catch(error => console.log(error))
                
        })
                */

            $.get(apiURL + endpoint + pokemon, function (data) {
                $("#contenido").html("<h4>" + data.name + "</h4><img src='" + data.sprites.front_default + "'>");
                $("#pokemon").val("");
            })
        }
        console.log(pokemon);
    })

    $("#buscarFrase").on("click", function () {
        let apiURL = "https://api.breakingbadquotes.xyz/v1/";
        let endpoint = "quotes";

        $.get(apiURL + endpoint, function (data) {
            console.log(data)
            $("#contenido-frase").html("<h3>" + data[0].author + "</h3><b>" + data[0].quote + "</b>")
        })
    })
    /*

    
$.post( "test.php", { name: "John", time: "2pm" })
  .done(function( data ) {
    alert( "Data Loaded: " + data );
  });

  */
})