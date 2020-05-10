$(document).ready(main);

function main(){
    $("#btnbusqueda").click(showtbl);
}

function showtbl(){
    var busqueda = {'bus': $('#busqueda').val()};
    $.ajax({
        type: 'POST',
        url: '../PHP/registros.php',
        data: busqueda,
        dataType: 'html'
    }).done(
        function(tabla){
            $("#tabla").html(tabla);
        }
    );
}