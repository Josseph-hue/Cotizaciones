<?php
// incluye la clase Db
require_once('connection_db.php');

	class CrudCotizacionModelo{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($cotizacionmodelo){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO productos(MODELO,DESCRIPCION,PUERTOS,POE,STACK,REFERENCIA,PRECIO) values(:MODELO,:DESCRIPCION,:PUERTOS,:POE,:STACK,:REFERENCIA,:PRECIO)');
			$insert->bindValue('MODELO',$cotizacionmodelo->getModelo());
			$insert->bindValue('DESCRIPCION',$cotizacionmodelo->getDescripcion());
			$insert->bindValue('PUERTOS',$cotizacionmodelo->getPuertos());
			$insert->bindValue('POE',$cotizacionmodelo->getPoe());
			$insert->bindValue('STACK',$cotizacionmodelo->getStack());
			$insert->bindValue('REFERENCIA',$cotizacionmodelo->getReferencia());
			$insert->bindValue('PRECIO',$cotizacionmodelo->getPrecio());
			$insert->execute();

		}

		// método para mostrar todos los libros
		/* public function mostrar(){
			$db=Db::conectar();
            $listaLibros=[];            
			$select=$db->query('SELECT * FROM libros');

			foreach($select->fetchAll() as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setNombre($libro['nombre']);
				$myLibro->setAutor($libro['autor']);
				$myLibro->setAnio_edicion($libro['anio_edicion']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM libros WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM libros WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$libro=$select->fetch();
			$myLibro= new Libro();
			$myLibro->setId($libro['id']);
			$myLibro->setNombre($libro['nombre']);
			$myLibro->setAutor($libro['autor']);
			$myLibro->setAnio_edicion($libro['anio_edicion']);
			return $myLibro;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE libros SET nombre=:nombre, autor=:autor,anio_edicion=:anio  WHERE ID=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('nombre',$libro->getNombre());
			$actualizar->bindValue('autor',$libro->getAutor());
			$actualizar->bindValue('anio',$libro->getAnio_edicion());
			$actualizar->execute();
		} */
	}
?>