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
</head>
<body>
<div class="col-8">
<div class="card">
     <div class="card-body">
                <div class="title" align='center'>
                    <label class="form-check-label" for="examplecheck1">COTIZACIÓN ELECTRONICA</label>
                </div>
<div class="container">
    <div class="row">
        <div class>
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
                    <label class="form-check-label" for="examplecheck1">Marca</label>
                    <select name="marca" class="form-control">
                        <option>Seleccione:</option>
                        <?php
                            // Realizamos la consulta para extraer los datos
                            $db=Db::conectar();
                            $select=$db->query('SELECT * FROM marca ORDER BY NOMBRE ASC');                            
                            foreach($select->fetchAll() as $marca){
                                echo '<option value="'.$marca['id'].'">'.$marca['NOMBRE'].'</option>';
                            }
                        ?>                    
                    </select>
                </div>
                <br>
                <div>      
                    <label class="form-check-label" for="examplecheck1">Tipo de Equipo</label>
                    <select name="tipoe" class="form-control">
                        <option>Seleccione:</option>
                        <?php
                            // Realizamos la consulta para extraer los datos
                            $db=Db::conectar();
                            $select=$db->query('SELECT * FROM tipo_equipo ORDER BY NOMBRE ASC');                            
                            foreach($select->fetchAll() as $tipoEquipo){
                                echo '<option value="'.$tipoEquipo['id'].'">'.$tipoEquipo['NOMBRE'].'</option>';
                            }
                        ?>                    
                    </select>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1">Poe o Poe+</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="poe" id="exampleRadios1" value="si" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        SI
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="poe" id="exampleRadios2" value="no">
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
                    <input class="form-check-input" type="radio" name="stack" id="exampleRadios2" value="si" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        SI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="stack" id="exampleRadios3" value="no">
                    <label class="form-check-label" for="exampleRadios2">
                        NO
                    </label>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div>      
                    <label class="form-check-label" for="examplecheck1">Número de Puertos</label>
                    <select name="puertos" class="form-control">
                    <option>Seleccione:</option>
                        <?php
                            // Realizamos la consulta para extraer los datos
                            $db=Db::conectar();
                            $select2=$db->query('SELECT * FROM puertos ORDER BY PUERTOS ASC');                            
                            foreach($select2->fetchAll() as $puerto){
                                echo '<option value="'.$puerto['id'].'">'.$puerto['PUERTOS'].'</option>';
                            }
                        ?>       
                    </select>
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div>
                    <label class="form-check-label" for="exampleCheck1">Cantidad de Equipos</label>
                    <input type="number" class="form-control sumtot" name="cantequipos" id="cantequipos" min="1" value="1">
                </div>
                <div>
                    <label class="form-check-label" for="examplecheck1"></label>
                </div>
                <div>
                    <label class="form-check-label" for="exampleCheck1">Cantidad de Meses</label>
                    <input type="number" class="form-control sumtot" name="cantmeses" id="cantmeses" min="1" value="1">
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
</div>
</div>
</div>
<div></div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>