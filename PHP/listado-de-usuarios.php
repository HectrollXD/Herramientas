<?php
    include ("conexion.php");
    $tabla = "";
    $tabla = "
        <table class='table'>
            <thead class='thead-dark'>
                <tr>
                    <th scope='col'>Usuario</th>
                    <th scope='col'>Nombre</th>
                    <th scope='col'>Apellido Paterno</th>
                    <th scope='col'>Apellido Materno</th>
                    <th scope='col'></th>
                </tr>
            </thead>
            <tbody>
        ";
    $QueryString = "SELECT * FROM Usuarios ORDER BY NUsuario ASC";
    $Query = $ConnectionString -> query($QueryString);
    while($rows = $Query -> fetch_array(MYSQLI_NUM)){
        $tabla .= "
                <tr>
                    <td>$rows[0]</td>
                    <td>$rows[2]</td>
                    <td>$rows[3]</td>
                    <td>$rows[4]</td>
                    <td><input type='button' value='Eliminar' class='btn btn-danger form-control' id='$rows[0]'></td>
                </tr>
        ";
    }
    $tabla .= "
            </tbody>
        </table>
    ";
    if(mysqli_num_rows($Query) <= 0){
        $tabla = "No hay usuarios.";
    }
    $ConnectionString -> close();
    echo $tabla;
?>
