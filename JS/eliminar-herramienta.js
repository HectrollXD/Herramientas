$(document).ready(main);

function main(){
    $("#tabla").on('click','.btn-danger',eliminar);
}

function eliminar(){
    var datos = {
        'herra': $(this).attr('id')
    };
    $.ajax({
        type: 'POST',
        url: '../PHP/eliminar-herramienta.php',
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
                if(data.errores.eliminar){
                    alert(data.errores.eliminar);
                }
            }
        }
    );
}

function showtbl(){
    $.ajax({
        type: 'POST',
        url: '../PHP/listado-de-herramienta.php',
        dataType: 'html'
    }).done(
        function(data){
            $('#tabla').html(data);
        }
    );
}