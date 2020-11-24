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
		$cotizacion->setEmpresa($_POST['empresa']);
		$cotizacion->setCorreo($_POST['correo']);
		$crud->insertar($cotizacion);
		$tipoEquipo = $_POST['tipoe'];
		$poe = $_POST['poe'];
		$stack = $_POST['stack'];
		$puertos = $_POST['puertos'];
		$cantequipos = $_POST['cantequipos'];
		$cantmeses = $_POST['cantmeses'];

		}
?>