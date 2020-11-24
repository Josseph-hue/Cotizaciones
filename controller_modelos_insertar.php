rolador de peticionesPHP
<?php
//incluye la clase Libro y CrudLibro
require_once('crud_cotizacion_modelos_insertar.php');
require_once('Cotizacion_modelos_insertar.php');

$crudModelo= new CrudCotizacionModelo();
$modelo= new CotizacionModelo();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar2'])) {
		$modelo->setModelo($_POST['modelo']);
		$modelo->setDescripcion($_POST['descripcion']);
		$modelo->setPuertos($_POST['puertos']);
		$modelo->setPoe($_POST['poe']);
		$modelo->setStack($_POST['stack']);
		$modelo->setReferencia($_POST['referencia']);
		$modelo->setPrecio($_POST['precio']);
		$modelo->setMarca($_POST['marca']);
		$modelo->setTipoe($_POST['tipoe']);
		/* $libro->setAutor($_POST['autor']);
		$libro->setAnio_edicion($_POST['edicion']); */
		//llama a la función insertar definida en el crud
		$crudModelo->insertar2($modelo);
		header('Location: modelos_insertar.php');
		}
	if (isset($_POST['guardarMarca'])) {
		$modelo->setMarca($_POST['marca']);
		$crudModelo->guardarMarca($modelo);
		header('Location: modelos_insertar.php');
}
	if (isset($_POST['guardarTipo'])) {
			$modelo->setTipoe($_POST['tipoe']);
			$crudModelo->guardarTipo($modelo);
			header('Location: modelos_insertar.php');
	}
	if (isset($_POST['guardarModelo'])) {
			$modelo->setModelo($_POST['modelo']);
			$crudModelo->guardarModelo($modelo);
			header('Location: modelos_insertar.php');
	}
?>