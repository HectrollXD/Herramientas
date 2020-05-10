<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap/bootstrap.min.css">
        <title>Tomar Herramienta</title>
    </head>
    <body onload="showtbl()">
        <header>
            <?php include ("SHARED/header.php"); ?>
        </header>
        <div class="container">
            </br>
            <div class="row">
                <div class="col-lg-12 text-center"> <h2>Registros de prestamos</h2> </div>
            </div>
            </br>
            <div class="container" id="tabla">
            </div>
        </div>
        <footer>
        </footer>
    </body>
    <script src="../JS/jQuery.js"></script>
    <script src="../JS/registros.js"></script>
    <script src="../JS/bootstrap/bootstrap.bundle.min.js"></script>
</html>