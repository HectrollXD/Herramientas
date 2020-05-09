<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
    </head>
    <body style="font-family:console; font-size:18px;">
        <header>
            <p>Database auto create.</p>
        </header>
        <div>
            <?php
                $ConnectionString = new mysqli("localhost", "root", "");
                $DB = $ConnectionString -> select_db("ToolboxLIAXY");
                if($DB){
                    echo("ToolboxLIAXY database already exist.</br>");
                    echo '<input type="button" id="rti" value="return to index">';
                }
                else{
                    $Query = array();
                    $QueryString = "create database ToolboxLIAXY";
                    $Query['cdb'] = $ConnectionString -> query($QueryString);
                    $ConnectionString -> select_db("ToolboxLIAXY");

                    $QueryString = "
                        create table Herramientas(
                            IDHerramienta int AUTO_INCREMENT,
                            NomHerramienta varchar(100),
                            Descripcion varchar(500),
                            Status enum('En Prestamo','En Caja') default 'En Caja',
                            constraint PK_IDHerramienta primary key(IDHerramienta)
                        )
                    ";
                    $Query['ctbl1'] = $ConnectionString -> query($QueryString);
                    $QueryString = "
                        create table Usuarios(
                            NUsuario varchar(30),
                            Contra varchar(20),
                            Nombre varchar(50),
                            ApellidoP varchar(25),
                            ApellidoM varchar(25),
                            constraint PK_NUsuario primary key(NUsuario)
                        )
                    ";
                    $Query['ctbl2'] = $ConnectionString -> query($QueryString);
                    $QueryString = "
                        create table Prestamos(
                            NumReg int AUTO_INCREMENT,
                            Usuario varchar(30),
                            NombreU varchar(100),
                            HeTomada varchar(100),
                            DesHeTomada varchar(500),
                            FechaPrestamo varchar(25),
                            HoraPrestamo varchar(15),
                            FechaRegreso varchar(25),
                            HoraRegreso varchar(15),
                            StatusUsuario enum('Entrogo','No ha entregado') default 'No ha entregado',
                            constraint PK_NumReg primary key(NumReg)
                        )
                    ";
                    $Query['ctbl3'] = $ConnectionString -> query($QueryString);
                    if($Query['cdb'] && $Query['ctbl1'] && $Query['ctbl2'] && $Query['ctbl3']){
                        echo "database was created successfully...</br>";
                        echo '<input type="button" id="rti" value="return to index">';
                    }
                    else{
                        echo "it is necessary to create the database manually...</br>";
                        if(!$Query['cdb']){
                            echo("cause error: error to create database.</br>");
                        }
                        else if(!$Query['ctbl1']){
                            echo("cause error: error to create table Herramiantas.</br>");
                        }
                        else if(!$Query['ctbl2']){
                            echo("cause error: error to create table Usuarios.</br>");
                        }
                        else if(!$Query['ctbl3']){
                            echo("cause error: error to create table Prestamos.</br>");
                        }
                        echo '<input type="button" id="gtphpmyadmin" value="create database manually">';
                    }
                }
            ?>
        </div>
    </body>
    <script src="../JS/jQuery.js"></script>
    <script src="../JS/AutoCreateDB.js"></script>
</html>