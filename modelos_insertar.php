<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <form action="controller_modelos_insertar.php" method="POST">
                <input type="hidden" name="insertar">
                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" required placeholder="Modelo">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Opcional">
                </div>
                <div class="form-group">
                    <label for="puertos">Puertos</label>
                    <input type="text" class="form-control" id="puertos" name="puertos" placeholder="Numero de Puertos" required>
                </div>
                <div class="form-group">
                    <label for="poe">POE</label>
                    <input type="text" class="form-control" id="poe" name="poe" placeholder="Si o No" required>
                </div>
                <div class="form-group">
                    <label for="stack">Stack</label>
                    <input type="text" class="form-control" id="stack" name="stack" placeholder="Si o No" required>
                </div>
                <div class="form-group">
                    <label for="referencia">Referencia</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Modelo Fisico" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio de Alquiler" required>
                </div>
                <div
                    label class="form-check-label" for="exampleCheck1">Revise con detenimiento que todos los datos se encuentren correctos para evitar introducir información incorrecta.</label>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <button type="submit" class="btn btn-primary">INCLUIR</button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>