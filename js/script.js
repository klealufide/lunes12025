$(function () {
    $("#footer-container").load('components/footer.html');
    const menu = [
        { id: 1, nombre: "Casado con pollo", precio: 3500 },
        { id: 2, nombre: "Hamburguesa con papas", precio: 5000 },
    ];

    let orden = [];

    function getMenu() {
        $("#menu").empty().append("<h2>Menu del dia</h2>");
        menu.forEach((plato) => {
            $("#menu").append('<div class="card"><h3>' + plato.nombre + "</h3><p>Precio: " + plato.precio + "</p><button class='agregar' data-id='" + plato.id + "'>Agregar</button></div>"
            );
        })
    }

    getMenu();

    $(".agregar").on("click", function () {
        const id = $(this).data('id');
        const plato = menu.find(p => p.id === id);
        if (plato) {
            orden.push(plato);
            actualizarOrden();
        }
    })


    function actualizarOrden() {
        $("#listaOrden").empty();
        let total = 0;
        orden.forEach(item => {
            $("#listaOrden").append('<li>' + item.nombre + " - " + item.precio + "</li>");
            total += item.precio;
        })
        $("#total").text(total);
    }
});