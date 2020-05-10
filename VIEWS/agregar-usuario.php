<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap/bootstrap.min.css">
        <title>Agregar Usuarios</title>
    </head>
    <body>
        <header>
            <?php include ("SHARED/header.php"); ?>
        </header>
        <div class="container">
            </br>
            <div class="row">
                <div class="col-lg-12 text-center"> <h2>Agregar nuevo usuario</h2> </div>
            </div>
            </br>
            <div class="container">
                <!--Apellido Paterno-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="../ICONS/person-lines-fill.svg" width="32"></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" id="apater" placeholder="Apellido Paterno" maxlength="25">
                        </div>
                    </div>
                </div>
                <!--Apellido Materno-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="../ICONS/person-lines-fill.svg" width="32"></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" id="amater" placeholder="Apellido Materno" maxlength="25">
                        </div>
                    </div>
                </div>
                <!--Nombres-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="../ICONS/person-lines-fill.svg" width="32"></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" id="nom" placeholder="Nombre(s)" maxlength="50">
                        </div>
                    </div>
                </div>
                <!--Nombre de usuario-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="../ICONS/people-circle.svg" width="32"></span>
                            </div>
                            <input type="text" class="form-control form-control-lg" id="user" placeholder="Nombre de Usuario" maxlength="30">
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
                            <input type="password" class="form-control form-control-lg" id="pass" placeholder="Contraseña" maxlength="20">
                        </div>
                    </div>
                </div>
                <!--Botones-->
                <div class="row">
                    <div class="col-lg-4 offset-lg-8"><input type="button" value="Agregar usuario" id="agregarusu" class="btn btn-success form-control" ></div>
                </div>
            </div>
        </div>
        <footer>
        </footer>
    </body>
    <script src="../JS/jQuery.js"></script>
    <script src="../JS/agregar-usuarios.js"></script>
    <script src="../JS/bootstrap/bootstrap.bundle.min.js"></script>
</html>