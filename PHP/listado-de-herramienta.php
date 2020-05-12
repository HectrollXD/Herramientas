<?php
    include ("conexion_root.php");
    $tabla = "";
    $tabla = "
        <table class='table'>
            <thead class='thead-dark'>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Nombre</th>
                    <th scope='col'>Descripcion</th>
                    <th scope='col'></th>
                </tr>
            </thead>
            <tbody>
        ";
    $QueryString = "SELECT * FROM Herramientas WHERE Status = 'En Caja' ORDER BY IDHerramienta ASC";
    $Query = $ConnectionString -> query($QueryString);
    while($rows = $Query -> fetch_array(MYSQLI_NUM)){
        $tabla .= "
                <tr>
                    <td>$rows[0]</td>
                    <td>$rows[1]</td>
                    <td>$rows[2]</td>
                    <td><input type='button' value='Eliminar' class='btn btn-danger form-control' id='$rows[0]'></td>
                </tr>
        ";
    }
    $tabla .= "
            </tbody>
        </table>
    ";
    if(mysqli_num_rows($Query) <= 0){
        $tabla = "No hay herramientas.";
    }
    $ConnectionString -> close();
    echo $tabla;
?>
