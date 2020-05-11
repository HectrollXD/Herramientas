$(document).ready(main);

function main(){
    $.ajax({
        type: 'POST',
        url: '../PHP/listado-de-herramientas.php',
        dataType: 'html'
    }).done(
        function(data){
            $('#herramienta').html(data);
        }
    );

    $("#aceptar").click(
        function(){
            var datos = {
                'herr': $("#herramienta").val(),
                'usu': $("#usuario").val(),
                'contra': $("#contra").val()
            };
            var errores = [false, false];
            var mensaje = "Los campos: ";

            if(datos['usu'] == ""){
                errores[0] = true;
                mensaje += "Usuario. ";
            }else{
                errores[0] = false;
            }

            if(datos['contra'] == ""){
                errores[1] = true;
                mensaje += "Contraseña. ";
            }
            else{
                errores[1] = false;
            }

            if(!errores[1] && !errores[0]){
                $.ajax({
                    type: 'POST',
                    url: "../PHP/tomar-herramienta.php",
                    data: datos,
                    dataType: 'json',
                    encode: true
                }).done(
                    function(data){
                        if(data.exito){
                            alert(data.mensaje);
                            $('#usuario').val("");
                            location.reload();
                        }
                        else{
                            if(data.errores.usu){
                                alert(data.errores.usu);
                            }
                            else if(data.errores.contra){
                                alert(data.errores.contra);
                            }
                            else if(data.errores.herramienta){
                                alert(data.errores.herramienta);
                            }
                        }
                    }
                );
            }
            else{
                mensaje += "No pueden quedar vacíos.";
                alert(mensaje);
            }
        }
    );
}