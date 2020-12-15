rolador de peticionesPHP
<?php
//incluye la clase Libro y CrudLibro
require_once('crud_cotizacion.php');
require_once('cotizacion.php');
require_once('connection_db.php');

$crud= new CrudCotizacion();
$cotizacion= new Cotizacion();




	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$cotizacion->setNombrePersona($_POST['nombre']);
		$cotizacion->setNit($_POST['nit']);
		$cotizacion->setEmpresa($_POST['empresa']);
		$cotizacion->setCorreo($_POST['correo']);
		$idc = $crud->insertar($cotizacion);
		header('Location: producto.php?id_cliente='.$idc);

		}
	if (isset($_POST['productos'])) {
		var_dump($_POST);
		$fecha = date('d-m-Y');
		$cotizacion->setIdCliente($_POST['id_cliente']);
		$cotizacion->setCantEquipos($_POST['cantequipos']);
		$cotizacion->setCantMeses($_POST['cantmeses']);
		$cotizacion->setFecha($fecha);
		$idCotizacion = $crud->cotizacion($cotizacion);
		$marca = $_POST['marca'];
		$tipoEquipo = $_POST['tipoe'];
		$poe = $_POST['poe'];
		$stack = $_POST['stack'];
		$capacidad = $_POST['capacidad'];
		$distancia = $_POST['distancia'];
		$usuariosap = $_POST['usuariosap'];
		$usuariosfc = $_POST['usuariosfc'];
		$usuariosfj = $_POST['usuariosfj'];
		$usuariosf = $_POST['usuariosf'];
		$usuariosr = $_POST['usuariosr'];
		$puertos = $_POST['puertos'];
		$cantequipos = $_POST['cantequipos'];
		$cantmeses = $_POST['cantmeses'];

		$db=Db::conectar();
			$sql = ("SELECT * FROM productos pro WHERE pro.ID_MARCA=".$marca." AND pro.ID_TIPO_EQUIPO =".$tipoEquipo."");
			if (! empty($_POST['poe'])){
				$sql = $sql.' AND pro.POE ="'.$poe.'"';
			}
			if (! empty($_POST['stack'])){
				$sql = $sql.' AND pro.STACK ="'.$stack.'"';
			}	
			if (! empty($_POST['capacidad'])){
				$sql = $sql.' AND pro.DESCRIPCION ="'.$capacidad.'"';
			}	
			if (! empty($_POST['distancia'])){
				$sql = $sql.' AND pro.DISTANCIA ="'.$distancia.'"';
			}
			if (! empty($_POST['usuariosap'])){
				$sql = $sql.' AND pro.DESCRIPCION ='.$usuariosap;
			}
			if (! empty($_POST['usuariosfc'])){
				$sql = $sql.' AND pro.DESCRIPCION ='.$usuariosfc;
			}
			if (! empty($_POST['usuariosfj'])){
				$sql = $sql.' AND pro.DESCRIPCION ='.$usuariosfj;
			}
			if (! empty($_POST['usuariosf'])){
				$sql = $sql.' AND pro.DESCRIPCION ='.$usuariosf;
			}
			if (! empty($_POST['usuariosr'])){
				$sql = $sql.' AND pro.DESCRIPCION ='.$usuariosr;
			}
			if (! empty($_POST['puertos'])){
				$sql = $sql.' AND pro.ID_PUERTOS ='.$puertos;
			}	
			var_dump($sql);				
			$select=$db->query($sql); 
			
			foreach($select->fetchAll() as $respuesta){
				$id = $respuesta["id"];
				$costo = $respuesta["PRECIO"];
			}
		$cotizacion->setIdProducto($id);	
		$cotizacion->setPrecioProductoActual($costo);	
		$cotizacion->setIdCotizacion($idCotizacion);
		$idCotizacionProducto = $crud->cotizacionproducto($cotizacion);

		header('Location: cotizacion_online.php?idcotpro='.$idCotizacion);
		}
?>