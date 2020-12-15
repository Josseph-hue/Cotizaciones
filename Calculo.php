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
    <script type="text/javascript" src="js/calculos.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
<div id="contenedor">
    <form>
        <select id="marca" onchange="CargarProductos(this.value);">
            <option>-Selecciona una Marca-</option>
            <?php
            $db=Db::conectar();
            $select=$db->query("SELECT * FROM marca");                            
            foreach($select->fetchAll() as $marca){
                var_dump($marca);
                echo "<option value=" .$marca["id"]. ">" .$marca["NOMBRE"]. "</option>";
            }
            ?>
        </select>
        <br style="clear:both;">
        <select id="productos" onchange="CargarPuertos(this.value);">
            <option value="">seleccione</option>
        </select>
        <select id="puertos">
            <option value="">seleccione</option>
        </select>
    </form>
    <div id="respuesta"></div>
</div>  
<script>
function CargarProductos(val)
{    
    $.ajax({
        type: "POST",
        url: "multiselect.php",
        data: "ID_MARCA="+val,        
        success: function(resp){
            $("#productos").html(resp);
        }
    });
}
function CargarPuertos(val)
{
    $.ajax({
        type: "POST",
        url: "multiselect.php",
        data: "PUERTO="+val,        
        success: function(resp){
            $("#puertos").html(resp);
        }
    });
}
</script>
</body>
</html>