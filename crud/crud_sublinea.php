<?php
//conexion base de datos
require_once('conexion.php');
 
	class CrudSublinea{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo linea
		public function insertar($linea){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO sublinea values(NULL,:codigo,:descripcion)');
			$insert->bindValue('codigo',$linea->getCodigo());
			$insert->bindValue('descripcion',$linea->getDescripcion());
			$insert->execute();
 
		}
 
		// método para mostrar todos las sublineas
		public function mostrar(){
			$db=Db::conectar();
			$listaLinea=[];
			$select=$db->query('SELECT * FROM sublinea');
 
			foreach($select->fetchAll() as $linea){
				$myLinea= new Linea();
				$myLinea->setId($linea['id']);
				$myLinea->setCodigo($linea['codigo']);
				$myLinea->setDescripcion($linea['descripcion']);
				$listaLinea[]=$myLinea;
			}
			return $listaLinea;
		}
 
		// método para eliminar un linea, recibe como parámetro el id del linea
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM sublinea WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			try {
    			$eliminar->execute();
    			header('Location: index.php');
			}catch(exception $e){
				echo '<script language="javascript">alert("No se puede eliminar, el dato que se intenta eliminar es llave foranea en otra tabla, elimine todos los registros que tengan esta llave o cambieles esta llave por otra"); window.history.back();</script>';
			}
		}
 
		// método para buscar un linea, recibe como parámetro el id del linea
		public function obtenerSublinea($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM sublinea WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$linea=$select->fetch();
			$myLinea= new Linea();
			$myLinea->setId($linea['id']);
			$myLinea->setcodigo($linea['codigo']);
			$myLinea->setDescripcion($linea['descripcion']);
			return $myLinea;
		}
 
		// método para actualizar un linea, recibe como parámetro el linea
		public function actualizar($linea){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE sublinea SET codigo=:codigo, descripcion=:descripcion  WHERE ID=:id');
			$actualizar->bindValue('id',$linea->getId());
			$actualizar->bindValue('codigo',$linea->getCodigo());
			$actualizar->bindValue('descripcion',$linea->getDescripcion());
			$actualizar->execute();
		}
	}
?>