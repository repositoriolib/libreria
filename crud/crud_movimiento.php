<?php
//conexion base de datos
require_once('conexion.php');

	class CrudMovimiento{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo movimiento
		public function insertar($movimiento){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO movimientos values(NULL,:tipo_mov,:cedula_mov,:nombre_mov,:fecha_mov,:valor_total_mov)');
			$insert->bindValue('tipo_mov',$movimiento->getTipo_mov());
			$insert->bindValue('cedula_mov',$movimiento->getCedula_mov());
			$insert->bindValue('nombre_mov',$movimiento->getNombre_mov());
			$insert->bindValue('fecha_mov',$movimiento->getFecha_mov());
			$insert->bindValue('valor_total_mov',$movimiento->getValor_total_mov());
			$insert->execute();
 
		}
 
		// método para mostrar todos los movimientos
		public function mostrar(){
			$db=Db::conectar();
			$listaMovimiento=[];
			$select=$db->query('SELECT * FROM movimientos');
 
			foreach($select->fetchAll() as $movimiento){
				$myMovimiento= new Movimiento();
				$myMovimiento->setId($movimiento['id']);
				$myMovimiento->setTipo_mov($movimiento['tipo_mov']);
				$myMovimiento->setCedula_mov($movimiento['cedula_mov']);
				$myMovimiento->setNombre_mov($movimiento['nombre_mov']);
				$myMovimiento->setFecha_mov($movimiento['fecha_mov']);
				$myMovimiento->setValor_total_mov($movimiento['valor_total_mov']);
				$listaMovimiento[]=$myMovimiento;
			}
			return $listaMovimiento;
		}
 
		// método para eliminar un movimiento, recibe como parámetro el id del movimiento
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM movimientos WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			try {
    			$eliminar->execute();
    			header('Location: index.php');
			}catch(exception $e){
				echo '<script language="javascript">alert("No se puede eliminar, el dato que se intenta eliminar es llave foranea en otra tabla, elimine todos los registros que tengan esta llave o cambieles esta llave por otra"); window.history.back();</script>';
			}
		}
 
		// método para buscar un movimiento, recibe como parámetro el id del movimiento
		public function obtenerMovimiento($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM movimientos WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$movimiento=$select->fetch();
			$myMovimiento= new Movimiento();
			$myMovimiento->setId($movimiento['id']);
			$myMovimiento->setTipo_mov($movimiento['tipo_mov']);
			$myMovimiento->setCedula_mov($movimiento['cedula_mov']);
			$myMovimiento->setNombre_mov($movimiento['nombre_mov']);
			$myMovimiento->setFecha_mov($movimiento['fecha_mov']);
			$myMovimiento->setValor_total_mov($movimiento['valor_total_mov']);
			return $myMovimiento;
		}
 
		// método para actualizar un movimiento, recibe como parámetro el movimiento
		public function actualizar($movimiento){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE movimientos SET tipo_mov=:tipo_mov, cedula_mov=:cedula_mov, nombre_mov=:nombre_mov, fecha_mov=:fecha_mov, valor_total_mov=:valor_total_mov  WHERE ID=:id');
			$actualizar->bindValue('id',$movimiento->getId());
			$actualizar->bindValue('tipo_mov',$movimiento->getTipo_mov());
			$actualizar->bindValue('cedula_mov',$movimiento->getCedula_mov());
			$actualizar->bindValue('nombre_mov',$movimiento->getNombre_mov());
			$actualizar->bindValue('fecha_mov',$movimiento->getFecha_mov());
			$actualizar->bindValue('valor_total_mov',$movimiento->getValor_total_mov());
			$actualizar->execute();
		}
	}
?>