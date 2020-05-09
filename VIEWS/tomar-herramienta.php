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
                <!--Usuario-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="../ICONS/people-circle.svg" width="32"></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" id="usuario" placeholder="Nombre de usuario" maxlength="30">
                        </div>
                    </div>
                </div>
                <!--Contraseña-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="../ICONS/lock-fill.svg" width="32"></span>
                            </div>
                            <input type="password" class="form-control form-control-lg" id="contra" placeholder="Contraseña" maxlength="20">
                        </div>
                    </div>
                </div>
                <!--Botones-->
                <div class="row">
                    <div class="col-lg-4 offset-lg-8"><input type="button" value="Tomar herramienta" id="aceptar" class="btn btn-success form-control" ></div>
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