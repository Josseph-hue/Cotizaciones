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
                <form action="controller.php" method="POST">
                    <input type="hidden" name="productos">
                    <input type="hidden" name="id_cliente" value="<?php echo $_GET['id_cliente'] ?>">
                    <div class="row">                    
                        <div id="formproductogen">
                            <div id="formproducto">
                                <br>
                                <div>
                                    <label class="form-check-label5" align='center' for="h2">Eliga los Productos</label>
                                </div>
                                <br>
                                <div>      
                                    <label class="form-check-label" for="examplecheck1">Marca</label>
                                    <select id="marca" name="marca" class="form-control" onchange="CargarProductos(this.value);" required>
                                        <option value="">-Selecciona una Marca-</option>
                                        <?php
                                            $db=Db::conectar();
                                            $select=$db->query("SELECT * FROM marca");                            
                                            foreach($select->fetchAll() as $marca){
                                                echo "<option value=" .$marca["id"]. ">" .$marca["NOMBRE"]. "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <br>
                                <div>      
                                    <label class="form-check-label" for="examplecheck1">Tipo de Equipo</label>
                                    <select name="tipoe" id="tipoe" onchange="CargarPuertos(this.value);" class="form-control" required>
                                        <option value="">-Selecciona una Tipo de Equipo-</option>                 
                                    </select>
                                </div>
                                <div>
                                    <label class="form-check-label" for="examplecheck1"></label>
                                </div>
                                <div id="poe" class="poe" style="display: none;">
                                    <div>
                                        <label class="form-check-label" for="examplecheck1">Poe o Poe+</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="poe" id="" value="SI" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            SI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="poe" id="exampleRadios2" value="NO">
                                        <label class="form-check-label" for="exampleRadios2">
                                            NO
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-check-label" for="examplecheck1"></label>
                                </div>
                                <div id="stack" class="stack" style="display: none;">
                                    <div>
                                        <label class="form-check-label" for="examplecheck1">Stack</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="stack" id="exampleRadios2" value="SI" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            SI
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="stack" id="exampleRadios3" value="NO">
                                        <label class="form-check-label" for="exampleRadios2">
                                            NO
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-check-label" for="examplecheck1"></label>
                                </div>
                                <div id="ccapacidad" style="display: none;">      
                                    <label class="form-check-label" for="examplecheck1">Capacidad</label>
                                    <select name="capacidad" id="capacidad" class="form-control" onchange="CargarCapacidad(this.value);">
                                        <option value="">-Selecciona Capacidad del Modulo-</option>
                                        <?php
                                            $db=Db::conectar();
                                            $select=$db->query("SELECT DISTINCT pro.DESCRIPCION FROM productos pro WHERE pro.ID_TIPO_EQUIPO=6 AND pro.DESCRIPCION ORDER BY DISTANCIA ASC");                            
                                            foreach($select->fetchAll() as $capacidad){
                                                echo "<option value=\"".$capacidad["DESCRIPCION"]. "\">" .$capacidad["DESCRIPCION"]. "</option>";
                                            }
                                        ?>                       
                                    </select>
                                </div>
                                    <div id="cdistancia" style="display: none;">      
                                        <label class="form-check-label" for="examplecheck1">Alcance</label>
                                        <select name="distancia" id="distancia" class="form-control">
                                            <option value="">-Selecciona Alcance en Metros-</option>                     
                                        </select>
                                    </div>
                                    <div id="nusuariosap" style="display: none;">      
                                        <label class="form-check-label" for="examplecheck1">Numero de Usuarios</label>
                                        <select name="usuariosap" id="usuarios" class="form-control" >
                                            <option value="">-Selecciona Numero de Usuarios-</option>
                                            <?php
                                                $db=Db::conectar();
                                                $select=$db->query("SELECT DISTINCT pro.ID_TIPO_EQUIPO, pro.DESCRIPCION FROM productos pro WHERE pro.DESCRIPCION AND pro.ID_TIPO_EQUIPO=5 ORDER BY DESCRIPCION ASC");                            
                                                foreach($select->fetchAll() as $usuarios){
                                                    echo "<option value=" .$usuarios["DESCRIPCION"]. ">" .$usuarios["DESCRIPCION"]. "</option>";
                                                }
                                            ?>                    
                                        </select>
                                    </div>
                                    <div id="nusuariosfc" style="display: none;">      
                                        <label class="form-check-label" for="examplecheck1">Numero de Usuarios</label>
                                        <select name="usuariosfc" id="usuarios" class="form-control" >
                                            <option value="">-Selecciona Numero de Usuarios-</option>
                                            <?php
                                                $db=Db::conectar();
                                                $select=$db->query("SELECT DISTINCT pro.ID_TIPO_EQUIPO, pro.DESCRIPCION FROM productos pro WHERE pro.DESCRIPCION AND pro.ID_TIPO_EQUIPO=3 AND pro.ID_MARCA=1 ORDER BY DESCRIPCION ASC");                            
                                                foreach($select->fetchAll() as $usuarios){
                                                    echo "<option value=" .$usuarios["DESCRIPCION"]. ">" .$usuarios["DESCRIPCION"]. "</option>";
                                                }
                                            ?>                    
                                        </select>
                                    </div>
                                    <div id="nusuariosfj" style="display: none;">      
                                        <label class="form-check-label" for="examplecheck1">Numero de Usuarios</label>
                                        <select name="usuariosfj" id="usuarios" class="form-control" >
                                            <option value="">-Selecciona Numero de Usuarios-</option>
                                            <?php
                                                $db=Db::conectar();
                                                $select=$db->query("SELECT DISTINCT pro.ID_TIPO_EQUIPO, pro.DESCRIPCION FROM productos pro WHERE pro.DESCRIPCION AND pro.ID_TIPO_EQUIPO=3 AND pro.ID_MARCA=4 ORDER BY DESCRIPCION ASC");                            
                                                foreach($select->fetchAll() as $usuarios){
                                                    echo "<option value=" .$usuarios["DESCRIPCION"]. ">" .$usuarios["DESCRIPCION"]. "</option>";
                                                }
                                            ?>                    
                                        </select>
                                    </div>
                                    <div id="nusuariosf" style="display: none;">      
                                        <label class="form-check-label" for="examplecheck1">Numero de Usuarios</label>
                                        <select name="usuariosf" id="usuarios" class="form-control" >
                                            <option value="">-Selecciona Numero de Usuarios-</option>
                                            <?php
                                                $db=Db::conectar();
                                                $select=$db->query("SELECT DISTINCT pro.ID_TIPO_EQUIPO, pro.DESCRIPCION FROM productos pro WHERE pro.DESCRIPCION AND pro.ID_TIPO_EQUIPO=3 AND pro.ID_MARCA=2 ORDER BY DESCRIPCION ASC");                            
                                                foreach($select->fetchAll() as $usuarios){
                                                    echo "<option value=" .$usuarios["DESCRIPCION"]. ">" .$usuarios["DESCRIPCION"]. "</option>";
                                                }
                                            ?>                    
                                        </select>
                                    </div>
                                    <div id="nusuariosr" style="display: none;">      
                                        <label class="form-check-label" for="examplecheck1">Numero de Usuarios</label>
                                        <select name="usuariosr" id="usuarios" class="form-control" >
                                            <option value="">-Selecciona Numero de Usuarios-</option>
                                            <?php
                                                $db=Db::conectar();
                                                $select=$db->query("SELECT DISTINCT pro.ID_TIPO_EQUIPO, pro.DESCRIPCION FROM productos pro WHERE pro.DESCRIPCION AND pro.ID_TIPO_EQUIPO=2 ORDER BY DESCRIPCION ASC");                            
                                                foreach($select->fetchAll() as $usuarios){
                                                    echo "<option value=" .$usuarios["DESCRIPCION"]. ">" .$usuarios["DESCRIPCION"]. "</option>";
                                                }
                                            ?>                    
                                        </select>
                                    </div>
                                    <div id="npuertos" style="display: none;">      
                                        <label class="form-check-label" for="examplecheck1">Número de Puertos</label>
                                        <select name="puertos" id="puertos" class="form-control">
                                        <option value="">-Selecciona Número de Puertos-</option>                           
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
                                <br>
                            </div>
                        </div>
                        <br>
                        <div align="center">
                        <button id="addProducto" type="button" class="btn btn-primary">Añadir Producto</button>
                        </div>
                        <div>
                            <label class="form-check-label" for="examplecheck1"></label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Autorizo el envio de mis datos</label>
                        </div>
                        <br>
                        <div align="center"><button type="submit" class="btn btn-primary">FINALIZAR</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<script>
function CargarProductos(val)
{    
    $.ajax({        
        type: "POST",
        url: "multiselect.php",
        data: "ID_MARCA="+val,        
        success: function(resp){
            $("#tipoe").html(resp);
        }
    });
    
}
function CargarPuertos(val)
{
    var select1 = document.getElementById('marca').value;
    var select2 = document.getElementById('tipoe').value;
    if(select2==1 || select2==4 || select2==5 || select2==8){
        document.getElementById("poe").style.display = "block";
    } else{
        document.getElementById("poe").style.display = "none";
    }
    if(select2==1){
        document.getElementById("stack").style.display = "block";
    } else{
        document.getElementById("stack").style.display = "none";
    }
    if(select2==1 || select2==2 || select2==3 || select2==5 || select2==8){
        document.getElementById("npuertos").style.display = "block";
    } else{
        document.getElementById("npuertos").style.display = "none";
    }
    if(select2==6){
        document.getElementById("cdistancia").style.display = "block";
    } else{
        document.getElementById("cdistancia").style.display = "none";
    }
    if(select2==6){
        document.getElementById("ccapacidad").style.display = "block";
    } else{
        document.getElementById("ccapacidad").style.display = "none";
    }
    if(select1==4 && select2==3){
        document.getElementById("nusuariosfj").style.display = "block";
    } else{
        document.getElementById("nusuariosfj").style.display = "none";
    }
    if(select1==2 && select2==3){
        document.getElementById("nusuariosf").style.display = "block";
    } else{
        document.getElementById("nusuariosf").style.display = "none";
    }
    if(select1==1 && select2==3){
        document.getElementById("nusuariosfc").style.display = "block";
    } else{
        document.getElementById("nusuariosfc").style.display = "none";
    }
    if(select2==2){
        document.getElementById("nusuariosr").style.display = "block";
    } else{
        document.getElementById("nusuariosr").style.display = "none";
    }
    if(select2==5){
        document.getElementById("nusuariosap").style.display = "block";
    } else{
        document.getElementById("nusuariosap").style.display = "none";
    }
    $.ajax({
        type: "POST",
        url: "multiselect.php",
        data: {select1: select1,select2: select2},                               
        success: function(resp){
            $("#puertos").html(resp);
        }
    });

    
}

function poeDisplay(){
    document.getElementById("poe").style.display = "block";
}

function CargarCapacidad(){
    var select3 = document.getElementById('capacidad').value;
    $.ajax({
        type: "POST",
        url:"multiselect.php",
        data: "DESCRIPCION="+select3,        
        success: function(resp){
            $("#distancia").html(resp);
        }
    });
}

$(document).ready(function() {

$("#addProducto").click(function() {
    inputDest = $("#formproducto").clone();
    $("#formproductogen").append(inputDest);

});
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>