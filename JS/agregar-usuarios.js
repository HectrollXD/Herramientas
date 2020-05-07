$(document).ready(main);

function main(){
    $("#agregarusu").click(
        function(){
            var datos = {
                "apaterno" : $("#apater").val(),
                "amaterno" : $("#amater").val(),
                "nombres" : $("#nom").val(),
                "usuario" : $("#user").val(),
                "contra" : $("#pass").val()
            };
            var validado = [false, false, false, false, false];
            var mensaje_error = "los campos: ";

            if(datos["apaterno"] == ""){
                mensaje_error += ("Apellido Paterno. ");
            }else{
                validado[0] = true;
            }

            if(datos["amaterno"] == ""){
                mensaje_error += ("Apellido Materno. ");
            }else{
                validado[1] = true;
            }

            if(datos["nombres"] == ""){
                mensaje_error += ("Nombre(s). ");
            }else{
                validado[2] = true;
            }

            if(datos["usuario"] == ""){
                mensaje_error += ("Usuario. ");
            }else{
                validado[3] = true;
            }

            if(datos["contra"] == ""){
                mensaje_error += ("Contraseña. ");
            }else{
                validado[4] = true;
            }


            if(validado[0] && validado[1] && validado[2] && validado[3] && validado[4]){
                $.ajax({
                    type: 'POST',
                    url: '../PHP/agregar-usuarios.php',
                    data: datos,
                    dataType: 'json',
                    encode: true
                }).done(
                    function(data){
                        if(data.exito){
                            alert(data.mensaje);
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