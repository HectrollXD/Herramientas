<?php
    include ("conexion_root.php");
    $datos = array();
    $errores = array();
    $herr = $_POST['herra'];

    $QueryString = "DELETE FROM Herramientas WHERE IDHerramienta = '$herr'";
    $Query = $ConnectionString -> query($QueryString);
    if(! $Query){
        $errores['eliminar'] = "Hubo un error al eliminar la herramienta.";
    }

    if(empty($errores)){
        $datos['exito'] = true;
        $datos['mensaje'] = "Se ha eliminado la herramienta satisfactoriamente";
    }
    else{
        $datos['exito'] = false;
        $datos['errores'] = $errores;
    }
    echo json_encode($datos);
?>