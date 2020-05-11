<?php
    include ("conexion.php");
    $opt = "";
    $QueryString = "SELECT * FROM Herramientas WHERE Status = 'En Caja' ORDER BY NomHerramienta ASC";
    $Query = $ConnectionString -> query($QueryString);
    while($rows = $Query -> fetch_array(MYSQLI_NUM)){
        $opt .= "<option value='$rows[0]'>$rows[1]: $rows[2]</option>";
    }
    $ConnectionString -> close();
    echo $opt;
?>
