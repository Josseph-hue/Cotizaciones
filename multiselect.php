<?php 
require_once('connection_db.php');
/* $prove = mysqli_real_escape_string($con, $_POST["ID_MARCA"]);
$query = "SELECT * FROM productos WHERE ID_MARCA = .$prove.";
$result = mysqli_query($con, $query);
 */
$db=Db::conectar();
if(isset($_POST["ID_MARCA"])){


    $select=$db->query("SELECT distinct PRO.ID_TIPO_EQUIPO, TP.NOMBRE 
                        FROM productos PRO, tipo_equipo TP 
                            WHERE TP.id = PRO.ID_TIPO_EQUIPO AND PRO.ID_MARCA=".$_POST["ID_MARCA"].""); 
    echo "<option>seleccione</option>";                     
foreach($select->fetchAll() as $marca){
        echo "<option value=" .$marca["ID_TIPO_EQUIPO"]. " onClick=\"poeDisplay();\">" .$marca["NOMBRE"]. "</option>";
    
}
}
if(isset($_POST["select1"])){
    $select=$db->query("SELECT DISTINCT PRO.ID_PUERTOS, PU.PUERTOS 
                            FROM productos PRO, puertos PU 
                                WHERE PU.id = PRO.ID_PUERTOS AND PRO.ID_MARCA=".$_POST["select1"]." AND PRO.ID_TIPO_EQUIPO=".$_POST["select2"]." ORDER BY PU.PUERTOS ASC");    
    echo "<option>seleccione</option>";                        
foreach($select->fetchAll() as $marca){
    echo "<option value=" .$marca["ID_PUERTOS"]. ">" .$marca["PUERTOS"]. "</option>";

}
}
if(isset($_POST["DESCRIPCION"])){


    $select=$db->query("SELECT DISTINCT PRO.id, PRO.DESCRIPCION, pro.DISTANCIA FROM productos pro WHERE pro.DISTANCIA AND pro.DESCRIPCION=".$_POST["DESCRIPCION"]." ORDER BY DISTANCIA ASC"); 
    echo "<option>seleccione</option>";                     
foreach($select->fetchAll() as $descripcion){
    echo "<option value=".$descripcion["DESCRIPCION"].">" .$descripcion["DISTANCIA"]. "</option>";
    
}

}
?>