<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap/bootstrap.min.css">
        <title>Tomar Herramienta</title>
    </head>
    <body>
        <header>
            <?php include ("SHARED/header.php"); ?>
        </header>
        <div class="container">
            </br>
            <div class="row">
                <div class="col-lg-12 text-center"> <h2>Registra la herramienta que utilizarás</h2> </div>
            </div>
            </br>
            <div class="container">
                <!--Herramienta-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="../ICONS/hammer.svg" width="32"></span>
                            </div>
                            <select id="herramienta" class="form-control form-control-lg">
                                
                            </select>
                        </div>
                    </div>
                </div>
                <!--Descripcion-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="../ICONS/info-square-fill.svg" width="32"></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" id="desherr" placeholder="Descripción de la herramienta" maxlength="500">
                        </div>
                    </div>
                </div>
                <!--Botones-->
                <div class="row">
                    <div class="col-lg-4 offset-lg-8"><input type="button" value="Agregar herramienta" id="agreherr" class="btn btn-success form-control" ></div>
                </div>
            </div>
        </div>
        <footer>
        </footer>
    </body>
    <script src="../JS/jQuery.js"></script>
    <script src="../JS/tomar-herramienta.js"></script>
    <script src="../JS/bootstrap/bootstrap.bundle.min.js"></script>
</html>