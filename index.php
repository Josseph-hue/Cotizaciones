<?php
// incluye la clase Db
require_once('connection_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
                <div class="title" align='center'>
                    <label class="form-check-label" for="examplecheck1">COTIZACIÓN ELECTRONICA</label>
                </div>
<div class="container">
    <div class="row">
        <div class="col-5">
            <form action="controller.php" method="POST">
                <input type="hidden" name="insertar">
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
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="example@tudominio.com" required>
                </div>
                <div>      
                    <label class="form-check-label" for="examplecheck1">Tipo de Equipo</label>
                    <select class="form-control">
                    <option>Seleccione:</option>
                    </select>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1">Poe o Poe+</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        SI
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        NO
                    </label>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1">Stack</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        SI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        NO
                    </label>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div>      
                    <label class="form-check-label" for="examplecheck1">Número de Puertos</label>
                    <select class="form-control">
                    <option>Seleccione:</option>
                    </select>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div>
                    <label class="form-check-label" for="exampleCheck1">Cantidad de Equipos</label>
                    <input type="number" class="form-control sumtot" name="cantnoches[]" id="cantnoches[]" min="1" value="1">
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div>
                    <label class="form-check-label" for="exampleCheck1">Cantidad de Meses</label>
                    <input type="number" class="form-control sumtot" name="cantnoches[]" id="cantnoches[]" min="1" value="1">
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Autorizo el envio de mis datos</label>
                </div>
                <div align='center'><button type="submit" class="btn btn-primary">ENVIAR</button></div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>