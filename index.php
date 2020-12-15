<?php
// incluye la clase Db
require_once('connection_db.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cotización Online</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/calculos.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
<body>
<div class="col-8">
    <div class="card">
        <div class="card-body">
            <div class="title" align="center">
                <label class="form-check-label" for="examplecheck1">COTIZACIÓN ELECTRONICA</label>
            </div>
            <div class="container">
                <div class="row">
                    <div class>                        
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="insertar">
                            <div class="form-group">
                                <label for="nit">NIT</label>
                                <input type="text" class="form-control" id="nit" name="nit" placeholder="NIT" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre y Apellido">
                            </div>
                            <div class="form-group">
                                <label for="empresa">Empresa</label>
                                <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo Electronico</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="example@tudominio.com" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Autorizo el envio de mis datos</label>
                            </div>
                            <br>
                            <div align="center"><button type="submit" class="btn btn-primary">CONTINUAR</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>