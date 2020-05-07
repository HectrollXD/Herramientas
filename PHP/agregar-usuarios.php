<?php
    include ("conexion_root.php");
    
    $errores = array();
    $datos = array();
    
    $ap = strtoupper($_POST['apaterno']);
    $am = strtoupper($_POST['amaterno']);
    $nom = strtoupper($_POST['nombres']);
    $usu = $_POST['usuario'];
    $pass = $_POST['contra'];

    if(! $ConnectionString){
        $errores["conexion"] = "No se pudo pudo realizar la conexion a la base de datos";
    }
    else{
        $QueryString = "INSERT INTO Usuarios (NUsuario, Contra, Nombre, ApellidoP, ApellidoM) VALUES(
            '$usu', '$contra', '$nom', '$ap', '$am' 
        )";
        $Query = $ConnectionString -> query($QueryString);
        if(! $Query){
            $errores["insersion"] = "Hubo un problema al crear el usuario.";
        }
    }

    if( empty($errores) ){
        $datos["exito"] = true;
        $datos["mensaje"] = "Se ha agregado el usuario con éxito.";
    }
    else{
        $datos["exito"] = false;
        $datos["errores"] = $errores;
    }
    $ConnectionString -> close();

    echo json_encode($datos);
?>