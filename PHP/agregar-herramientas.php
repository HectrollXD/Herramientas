<?php
    include ("conexion.php");
    
    $errores = array();
    $datos = array();
    
    $nh = strtoupper($_POST['nomherr']);
    $dh = strtoupper($_POST['desherr']);

    if(! $ConnectionString){
        $errores["conexion"] = "No se pudo pudo realizar la conexion a la base de datos";
    }
    else{
        $QueryString = "INSERT INTO Herramientas (NomHerramienta, Descripcion) VALUES(
            '$nh', '$dh'
        )";
        $Query = $ConnectionString -> query($QueryString);
        if(! $Query){
            $errores["insersion"] = "Hubo un problema al agregar la herramienta.";
        }
    }

    if( empty($errores) ){
        $datos["exito"] = true;
        $datos["mensaje"] = "Se ha agregado la herramienta con éxito.";
    }
    else{
        $datos["exito"] = false;
        $datos["errores"] = $errores;
    }
    $ConnectionString -> close();

    echo json_encode($datos);
?>