<?php
    include ("conexion.php");
    $tabla = "";
    
    if( $_POST['bus'] == "" ){
        $QueryString = "SELECT * FROM Prestamos WHERE StatusUsuario = 'No ha entregado' ORDER BY NumReg ASC";
        $Query = $ConnectionString -> query($QueryString);
        $tabla = "
            <table class='table'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Usuario</th>
                        <th scope='col'>Nombre del usuario</th>
                        <th scope='col'>ID herramienta</th>
                        <th scope='col'>Nombre de herramienta</th>
                        <th scope='col'>Descripcion de la herramienta</th>
                        <th scope='col'></th>
                    </tr>
                </thead>
                <tbody>
        ";
        while( $rows = $Query -> fetch_array(MYSQLI_NUM) ){
            $tabla .= "
                    <tr>
                        <td>$rows[0]</td>
                        <td>$rows[1]</td>
                        <td>$rows[2]</td>
                        <td>$rows[3]</td>
                        <td>$rows[4]</td>
                        <td>$rows[5]</td>
                        <td><input type='button' value='Regresar' class='btn btn-warning form-control' id='$rows[0]' id2='$rows[3]'></td>
                    </tr>
            ";
        }
        $tabla .= "
                </tbody>
            </table>
        ";
        if(mysqli_num_rows($Query) <= 0){
            $tabla = "No hay resultados similares a la busqueda realizada";
        }
    }
    else{
        $b = $_POST['bus'];
        $QueryString = "SELECT * FROM Prestamos 
        WHERE Usuario LIKE '%$b%' 
        OR NombreU LIKE '%$b%' 
        OR HeTomada LIKE '%$b%' 
        OR DesHeTomada LIKE '%$b%' 
        OR StatusUsuario LIKE '%$b%'
        ORDER BY NumReg ASC";
        $Query = $ConnectionString -> query($QueryString);
        $tabla = "
            <table class='table'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Usuario</th>
                        <th scope='col'>Nombre del usuario</th>
                        <th scope='col'>ID herramienta</th>
                        <th scope='col'>Nombre de herramienta</th>
                        <th scope='col'>Descripcion de la herramienta</th>
                        <th scope='col'></th>
                    </tr>
                </thead>
                <tbody>
        ";
        while( $rows = $Query -> fetch_array(MYSQLI_NUM) ){
            $tabla .= "
                        <tr>
                            <th scope='row'>$rows[0]</td>
                            <td>$rows[1]</td>
                            <td>$rows[2]</td>
                            <td>$rows[3]</td>
                            <td>$rows[4]</td>
                            <td>$rows[5]</td>
                            <td><input type='button' value='Regresar' class='btn btn-warning form-control' id='$rows[0]@$rows[3]'></td>
                        </tr>
            ";
        }
        $tabla .= "
                </tbody>
            </table>
        ";
        if(mysqli_num_rows($Query)<= 0){
            $tabla = "No hay resultados similares a la busqueda realizada";
        }
    }
    echo $tabla;
?>