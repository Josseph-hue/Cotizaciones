<?php
// incluye la clase Db
require_once('connection_db.php');

	class CrudCotizacion{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($cotizacion){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO cliente(NOMBRE,NIT,EMPRESA,CORREO) values(:NOMBRE,:NIT,:EMPRESA,:CORREO)');
			$insert->bindValue('NOMBRE',$cotizacion->getNombrePersona());
			$insert->bindValue('NIT',$cotizacion->getNit());
			$insert->bindValue('EMPRESA',$cotizacion->getEmpresa());
			$insert->bindValue('CORREO',$cotizacion->getCorreo());
			$insert->execute();

			$select=$db->query("SELECT DISTINCT id FROM cliente WHERE NIT=".$cotizacion->getNit());                            
			foreach($select->fetchAll() as $nit){
				$res = $nit["id"];
			}
			return $res;
		}
		public function cotizacion($cotizacion){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO cotizacion(ID_CLIENTE,CANT_MESES,CANT_EQUIPOS,FECHA) values(:ID_CLIENTE,:CANT_MESES,:CANT_EQUIPOS,:FECHA)');
			$insert->bindValue('ID_CLIENTE',$cotizacion->getIdCliente());
			$insert->bindValue('CANT_MESES',$cotizacion->getCantMeses());
			$insert->bindValue('CANT_EQUIPOS',$cotizacion->getCantEquipos());
			$insert->bindValue('FECHA',$cotizacion->getFecha());
			$insert->execute();	

			$select=$db->query("SELECT MAX(id) as id FROM cotizacion");                            
			foreach($select->fetchAll() as $sel){
				$id = $sel["id"];
			}	
			return $id;

		}
		public function cotizacionproducto($cotizacion){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO cotizacion_productos(ID_COTIZACION,ID_PRODUCTO,PRECIO_PRODUCTO_ACTUAL) values(:ID_COTIZACION,:ID_PRODUCTO,:PRECIO_PRODUCTO_ACTUAL)');
			$insert->bindValue('ID_COTIZACION',$cotizacion->getIdCotizacion());
			$insert->bindValue('ID_PRODUCTO',$cotizacion->getIdProducto());
			$insert->bindValue('PRECIO_PRODUCTO_ACTUAL',$cotizacion->getPrecioProductoActual());
			$insert->execute();			
			$select=$db->query("SELECT MAX(id) as id FROM cotizacion_productos");                            
			foreach($select->fetchAll() as $sel){
				$id = $sel["id"];
			}	
			return $id;

		}

		function idcliente($nit){
			$db=Db::conectar();
			$select=$db->query("SELECT UNIQUE id FROM cliente WHERE NIT=".$nit);                            
			foreach($select->fetchAll() as $nit){
				$res = $nit["id"];
			}
			return $res;
		}

		function consultaCalculo($nit){
			$db=Db::conectar();
			$select=$db->query("SELECT UNIQUE id FROM cliente WHERE NIT=".$nit);                            
			foreach($select->fetchAll() as $nit){
				$res = $nit["id"];
			}
			return $res;
		}
	}
?>