$(document).ready(main);

function main(){
    $("#btnbusqueda").click(showtbl);
    $("#tabla").on('click','.btn-warning', regresar);
}

function showtbl(){
    var busqueda = {'bus': $('#busqueda').val()};
    $.ajax({
        type: 'POST',
        url: '../PHP/mostrar-regresar.php',
        data: busqueda,
        dataType: 'html'
    }).done(
        function(tabla){
            $("#tabla").html(tabla);
        }
    );
}

function regresar(){
    var datos = { 
        'idp': $(this).attr('id'),
        'idh': $(this).attr('id2')
    };
    $.ajax({
        type: 'POST',
        url: '../PHP/regresar-herramienta.php',
        data: datos,
        dataType: 'json',
        encode: true
    }).done(
        function(data){
            if(data.exito){
                alert(data.mensaje);
                location.reload();
            }
            else{
                if(data.errores.registro){
                    alert(data.errores.registro);
                }
                else if(data.errores.herra){
                    alert(data.errores.registro);
                }
            }
        }
    );
}