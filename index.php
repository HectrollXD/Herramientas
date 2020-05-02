<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
    </head>
    <body style="font-family:console; font-size:18px;">
        <header>
            <p>Database connection.</p>
        </header>
        <div>
            <?php
                include ("PHP/conexion.php");
                if($ConnectionString){
                    header("Location: VIEWS/index.php");
                }
                else{
                    echo("error code: ".mysqli_connect_errno($ConnectionString)."</br>");
                    echo("error message: ".mysqli_connect_error($ConnectionString)."</br>");

                    include ("PHP/conexion_root.php");
                    if($ConnectionString_root){
                        $QueryString = "create database ToolboxLIAXY";
                        $Query = $ConnectionString_root -> query($QueryString);
                        if($Query){
                            echo "the database was created.</br>";
                        }
                        else{
                            echo "the database was not created.</br>";
                        }
                    }
                    else{
                        echo("The database must be generated manually.");
                        echo("error code: ".mysqli_connect_errno($ConnectionString_root)."</br>");
                        echo("error message: ".mysqli_connect_error($ConnectionString_root)."</br>");
                    }
                }
            ?>
        </div>
    </body>
</html>