<?php
    include ("conexion.php");

    $usu = $_POST['usu'];
    $contra = $_POST['contra'];
    $herr = $_POST['herr'];
    $datos_usu = array();
    $datos_herr = array();
    $datos = array();
    $errores = array();
    $usuexist = false;

    
    $QueryString = "SELECT * FROM Usuarios WHERE NUsuario = '$usu'";
    $Query = $ConnectionString -> query($QueryString);
    $rows = $Query -> fetch_array(MYSQLI_NUM);
    if($rows[0] === $usu){
        if($rows[1] === $contra){
            $datos_usu[0] = $rows[0];
            $datos_usu[1] = $rows[2]." ".$rows[3]." ".$rows[4];
        }else{
            $errores['contra'] = "La contraseña introducida no coincide con el usuario introducido.";
        }
    }else{
        $errores['usu'] = "El nombre de usuario no existe.";
    }
    $QueryString = "SELECT * FROM Herramientas WHERE IDHerramienta = $herr";
    $Query = $ConnectionString -> query($QueryString);
    while($rows = $Query -> fetch_array(MYSQLI_NUM)){
        if($rows[0] == $herr){
            $datos_herr[0] = $rows[0];
            $datos_herr[1] = $rows[1];
            $datos_herr[2] = $rows[2];
        }
        else{
            $errores['herramienta'] = "No se encontró una herramienta similar.";
        }
    }

    if(empty($errores)){
        $fecha = strtoupper(strftime('%d/%B/%Y'));
        $hora = date('h:i A');
        $QueryString = "INSERT INTO Prestamos(
                Usuario, NombreU, IDHerr, HeTomada, DesHeTomada, FechaPrestamo, HoraPrestamo
            )
            VALUES(
                '$datos_usu[0]', '$datos_usu[1]', '$datos_herr[0]', '$datos_herr[1]', '$datos_herr[2]', '$fecha','$hora'
            )
        ";
        $ConnectionString -> query($QueryString);
        $QueryString = "UPDATE Herramientas SET Status='En Prestamo' WHERE IDHerramienta = $herr";
        $ConnectionString -> query($QueryString);
        $datos['exito'] = true;
        $datos['mensaje'] = "El prestamo se ha registrado";
    }
    else{
        $datos['exito'] = false;
        $datos['errores'] = $errores;
    }
    $ConnectionString -> close();
    echo json_encode($datos);
?>