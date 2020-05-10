<?php
    include ("conexion_root.php");
    $datos = array();
    $errores = array();
    $idp = $_POST['idp'];
    $idh = $_POST['idh'];
    $fecha = strtoupper(strftime('%d/%B/%Y'));
    $hora = date('h:i A');
    
    $QueryString = "UPDATE Prestamos SET 
        FechaRegreso = '$fecha', HoraRegreso = '$hora', StatusUsuario = 'Entregado'
        WHERE NumReg = $idp";
    $Query = $ConnectionString -> query($QueryString);
    if(! $Query){
        $errores['registro'] = "No se pudo actualizar el registro.";
    }else{
        $QueryString = "UPDATE Herramientas SET Status = 'En Caja' WHERE IDHerramienta = $idh";
        $Query = $ConnectionString -> query($QueryString);
        if(! $Query){
            $errores['herra'] = "No se pudo actualizar el status de la herramienta.";
        }
    }

    if(empty($errores)){
        $datos['exito'] = true;
        $datos['mensaje'] = "Se actualizó el registro correctamente.";
    }
    else{
        $datos['exito'] = false;
        $datos['errores'] = $errores;
    }
    echo json_encode($datos);
?>