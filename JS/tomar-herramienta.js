$(document).ready(main);

function main(){
    $.ajax({
        type: 'POST',
        url: '../PHP/listado-de-herramientas.php',
    }).done(
        function(data){
            $('#herramienta').html(data);
        }
    );
}