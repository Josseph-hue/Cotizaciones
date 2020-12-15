<?php
// incluye la clase Db
require_once('connection_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Dispositivos</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="controller_modelos_insertar.php" method="POST">
                <input type="hidden" name="guardarMarca">
                <div class="card">
                    <div class="card-body">
                    <label class="form-check-label" for="examplecheck1">Marca</label>
                    <br>
                    <input type="text" name="marca" id="">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div> 
            </form>
        </div>
        <div class="col-8">
            <form action="controller_modelos_insertar.php" method="POST">
                <input type="hidden" name="guardarTipo">
                <div class="card">
                    <div class="card-body">
                    <label class="form-check-label" for="examplecheck1">Tipo de Equipo</label>
                    <br>
                    <input type="text" name="tipoe" id="">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
                <div>     
                </div>
            </form>
        </div>
        <br>
        <div class="col-8">
            <form action="controller_modelos_insertar.php" method="POST">
                <input type="hidden" name="guardarModelo">
                <div class="card">
                    <div class="card-body">
                    <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <br>
                    <input type="text" id="modelo" name="modelo" required placeholder="Modelo">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </div>
                <div>     
                </div>
                </div>
            </form>
        </div>
        <div class="col-8">
            <div class="card">
            <div class="card-body">
                <form action="controller_modelos_insertar.php" method="POST">
                <input type="hidden" name="insertar2">
                <div>      
                    <label class="form-check-label" for="examplecheck1">Tipo de Equipo</label>
                    <select name="tipoe"class="form-control">
                    <option>Seleccione:</option>
                        <?php
                            // Realizamos la consulta para extraer los datos
                            $db=Db::conectar();
                            $select4=$db->query('SELECT * FROM tipo_equipo ORDER BY NOMBRE ASC');                            
                            foreach($select4->fetchAll() as $tipoe){
                                echo '<option value="'.$tipoe['id'].'">'.$tipoe['NOMBRE'].'</option>';
                            }
                        ?>       
                    </select>
                </div>
                
                <div>
            <form action="controller_modelos_insertar.php" method="POST">
                <div>      
                    <label class="form-check-label" for="examplecheck1">Marca</label>
                    <select name="marca"class="form-control">
                    <option>Seleccione:</option>
                        <?php
                            // Realizamos la consulta para extraer los datos
                            $db=Db::conectar();
                            $select5=$db->query('SELECT * FROM marca ORDER BY NOMBRE ASC');                            
                            foreach($select5->fetchAll() as $marca){
                                echo '<option value="'.$marca['id'].'">'.$marca['NOMBRE'].'</option>';
                            }
                        ?>       
                    </select>
                </div>
                </div>
                <div>
            <form action="controller_modelos_insertar.php" method="POST">
                <div>      
                    <label class="form-check-label" for="examplecheck1">Modelo</label>
                    <select name="modelo"class="form-control">
                    <option>Seleccione:</option>
                        <?php
                            // Realizamos la consulta para extraer los datos
                            $db=Db::conectar();
                            $select6=$db->query('SELECT * FROM modelos ORDER BY MODELO ASC');                            
                            foreach($select6->fetchAll() as $modelo){
                                echo '<option value="'.$modelo['id'].'">'.$modelo['MODELO'].'</option>';
                            }
                        ?>       
                    </select>
                </div>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Opcional"></textarea>
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
                <br>
                    <div align='center'><button type="submit" class="btn btn-primary">INCLUIR</button></div>
                    </div>
            </form>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
<br>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>