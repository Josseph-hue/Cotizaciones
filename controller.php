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
		/* $libro->setAutor($_POST['autor']);
		$libro->setAnio_edicion($_POST['edicion']); */
		//llama a la función insertar definida en el crud
		$crud->insertar($cotizacion);
		header('Location: index.php');
		}
		// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	/* elseif(isset($_POST['actualizar'])){
		$libro->setId($_POST['id']);
		$libro->setNombre($_POST['nombre']);
		$libro->setAutor($_POST['autor']);
		$libro->setAnio_edicion($_POST['edicion']);
		$crud->actualizar($libro);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	} */
?>