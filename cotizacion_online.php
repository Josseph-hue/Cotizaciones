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
    <link rel="icon" type="image/jpg" href="C:\xampp\htdocs\cotizacion-web\image\Favicon 200x200.gif">
    <script type="text/javascript" src="js/calculos.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<div class="col-9">
    <div class>
        <div class="card">
            <div class="card-body">
            <img src="image/logo.png" alt="">
                <br>
            </div>
        </div>
    </div>
    <div class>    
    <div class="card2">
        <div class="card-body2" >
        <div>
            <label class="form-check-label3" for="examplecheck1">Cotización N° CE-00<?php echo $_GET['idcotpro']?></label>
            <?php

                    $db=Db::conectar();
                    $select=$db->query("SELECT cli.NOMBRE, cli.NIT, cli.EMPRESA, cli.CORREO, copro.ID_PRODUCTO, pro.REFERENCIA, co.CANT_EQUIPOS, copro.PRECIO_PRODUCTO_ACTUAL, SUM(co.CANT_EQUIPOS* copro.PRECIO_PRODUCTO_ACTUAL) AS SUMA, SUM(co.CANT_EQUIPOS* copro.PRECIO_PRODUCTO_ACTUAL*1.19) AS TOTAL, SUM(co.CANT_EQUIPOS* copro.PRECIO_PRODUCTO_ACTUAL*0.19) AS IVA 
                        FROM cliente cli, cotizacion co, cotizacion_productos copro, productos pro 
                        WHERE copro.ID_COTIZACION=co.id AND copro.ID_PRODUCTO=pro.id AND co.ID_CLIENTE=cli.id AND copro.ID_COTIZACION=".$_GET["idcotpro"]."");                            
                    foreach($select->fetchAll() as $cotizacion){  
            ?>
            <!-- <input class="label_left" readonly="readonly" disabled name="consecutivo" <?php echo "<option value=" .$cotizacion["id"]. "></option>";?> -->
            <?php
                    }
                    $db=Db::conectar();
			        $insert=$db->prepare('UPDATE cotizacion
                                            SET PRECIO_TOTAL=:PRECIO_TOTAL WHERE id='.$_GET["idcotpro"]);
			        $insert->bindValue('PRECIO_TOTAL',$cotizacion["TOTAL"]);
			        $insert->execute();
                    
            ?>
            <label class="form-check-label3" for="examplecheck1">Fecha</label>
            <input class="label_right_2" type="datetime" readonly="readonly" disabled name="fecha"  value="<?php echo date("d-m-Y");?>">
        </div>
        </div>
    <div class>
        <div class="card2">
            <div class="card-body2">
                <label class="form-check-label2" for="examplecheck1">Cliente</label>
                <input class="label_right_2" readonly="readonly" disabled name="cliente" <?php echo "<option value=\"" .$cotizacion["NOMBRE"]. "\"></option>";?>
                <label class="form-check-label2" for="examplecheck1">NIT</label>
                <input class="label_right_2" readonly="readonly" disabled name="nit" <?php echo "<option value=" .$cotizacion["NIT"]. "></option>";?>
                <label class="form-check-label2" for="examplecheck1">Empresa</label>
                <input class="label_right_2" readonly="readonly" disabled name="empresa" <?php echo "<option value=\"" .$cotizacion["EMPRESA"]. "\"></option>";?>
                <label class="form-check-label2" for="examplecheck1">Correo</label>
                <input class="label_right_2" readonly="readonly" disabled name="correo" <?php echo "<option value=" .$cotizacion["CORREO"]. "></option>";?>
            </div>
        </div>
    </div>
    <div class>
        <div class="card2">
            <div class="card-body2">
                <div class="title" align='center'>
                    <label class="form-check-label" for="examplecheck1">CUADRO DE CANTIDADES</label>
                </div>
            </div>
        </div>
    </div>
    <div class>    
        <div class="card2">
        <div class="card-body2" >
            <table class="table col-11">
        <thead class="thead-dark">
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor Uni.</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>
            <input class="label_right" readonly="readonly" disabled name="cliente" <?php echo "<option value=\"" .$cotizacion['REFERENCIA']. "\"></option>";?>
            </td>
            <td>
            <input class="label_right" readonly="readonly" disabled name="cliente" <?php echo "<option value=" .$cotizacion["CANT_EQUIPOS"]. "></option>";?>
            </td>
            <td>
            <input class="label_right" readonly="readonly" disabled name="cliente" <?php echo "<option value=" .$cotizacion["PRECIO_PRODUCTO_ACTUAL"]. "></option>";?>
            </td>
            <td>
            <input class="label_right" readonly="readonly" disabled name="cliente" <?php echo "<option value=" .$cotizacion["SUMA"]. "></option>";?>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
    <div class>    
        <div class="card2">
        <div class="card-body2" >
            <table class="table col-4" align='right'>
        <tbody>
            <tr>
                <td>Subtotal</td>
            <td>
            <input class="label_right" readonly="readonly" disabled name="cliente" <?php echo "<option value=" .$cotizacion["SUMA"]. "></option>";?>
            </td>
            </tr>
            <tr>
                <td>IVA</td>
            <td>
                <input class="label_right" readonly="readonly" disabled name="cliente" <?php echo "<option value=" .str_replace('.00', '',$cotizacion["IVA"]). "></option>";?>
            </td>
            </tr>
            <tr>
                <td>Total</td>
            <td>
            <input class="label_right" readonly="readonly" disabled name="cliente" <?php echo "<option value=" .str_replace('.00', '',$cotizacion["TOTAL"]). "></option>";?>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
    <div class>    
        <div class="card2">
        <div class="card-body2" >
        </div>
        <label class="form-check-label3" for="examplecheck1">Condiciones Comerciales</label>
        <label class="form-check-label4" for="examplecheck1">Modena: Peso Colombiano</label>
        <label class="form-check-label4" for="examplecheck1">Tiempo de entrega: 1 día bajo orden de compra</label>
        <label class="form-check-label4" for="examplecheck1">Formato de Pago: 30 días fecha factura</label>
        <label class="form-check-label4" for="examplecheck1">Validez de la Cotización: 5 Días - Sujeta a Verificación</label>
        <br>
        <br>
        </div>
    </div>
    <div class>
        <div class="card2">
            <div class="card-body2">
                <div class align='center'>
                    <label class="form-check-label" for="examplecheck1">PBX: 7425540 Cel: 3105635427</label>
                    <label class="form-check-label" for="examplecheck1">info@gmtvaritec.com</label>
                </div>
            </div>
        </div>
    </div>
    <div class align='center'>
        <div class="card2">
            <div class="card-body2">
                <label class="form-check-label" for="examplecheck1">Oficina - Cr. 53 # 115 - 20 Oficina 202 / Bodega - Cr. 98B # 132 A - 28 Piso 3 / Bogotá D.C.</label>
                <label class="form-check-label" for="examplecheck1">P.B.X. [57 1] 7425540 / www.gmtvaritec.com - www.arriendoswichtesyrouters.com</label>
                <br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div></div>
<br>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>