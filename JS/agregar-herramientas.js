$(document).ready(main);

function main(){
    $("#agreherr").click(
        function(){
            var datos = {
                "nomherr" : $("#nomherr").val(),
                "desherr" : $("#desherr").val()
            };
            var validado = [false, false];
            var mensaje_error = "los campos: ";

            if(datos["nomherr"] == ""){
                mensaje_error += ("Nombre de la herramienta. ");
            }else{
                validado[0] = true;
            }

            if(datos["desherr"] == ""){
                mensaje_error += ("Descripcion de la herramienta. ");
            }else{
                validado[1] = true;
            }


            if(validado[0] && validado[1]){
                $.ajax({
                    type: 'POST',
                    url: '../PHP/agregar-herramientas.php',
                    data: datos,
                    dataType: 'json',
                    encode: true
                }).done(
                    function(data){
                        if(data.exito){
                            alert(data.mensaje);
                            $("#nomherr").val("");
                            $("#desherr").val("");
                        }
                        else{
                            if(data.errores.conexion){
                                alert(data.errores.conexion);
                            }
                            else if(data.errores.insersion){
                                alert(data.errores.insersion);
                            }
                        }
                    }
                );
            }
            else{
                mensaje_error += "No pueden quedar vacíos";
                alert(mensaje_error);
            }
        }
    );
}