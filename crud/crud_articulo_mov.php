<?php
//conexion base de datos
require_once('conexion.php');
 
	class CrudArticulo_mov{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo articulo_mov
		public function insertar($articulo_mov){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO articulo_movimiento values(NULL,:id_mov,:id_producto,:cantidad,:valor)');

			$insert->bindValue('id_mov',$articulo_mov->getId_mov());
			$insert->bindValue('id_producto',$articulo_mov->getId_producto());
			//$insert->bindValue('cantidad',$articulo_mov->getCantidad());
			//$insert->bindValue('valor',$articulo_mov->getValor());
			//$insert->execute();

			//obtener que tipo de movimiento es
			$ver=$db->prepare('SELECT * FROM movimientos WHERE ID=:id_mov');
			$ver->bindValue('id_mov',$articulo_mov->getId_mov());
			$ver->execute();
			//ingresarlo en una variable de clase movimiento
			require_once('./clases/movimiento.php');
			$f = $ver->fetch();
			$mov= new Movimiento();
			$mov->setTipo_mov($f['tipo_mov']);

			if($mov->getTipo_mov() == 0){
				//tipo de movimiento:Entrada
				//valor se captura y se actualiza el campo “Costo Ultimo” en la tabla de productos.

				//actualizar el costo ultimo por el valor y el stock
				$insertV=$db->prepare('UPDATE datos_producto SET costo_ultimo=:valor, stock=stock+:cantidad WHERE ID=:id_producto');
				$insertV->bindValue('id_producto',$articulo_mov->getId_producto());
				$insertV->bindValue('cantidad',$articulo_mov->getCantidad());
				$insertV->bindValue('valor',$articulo_mov->getValor());
				$insertV->execute();

				//insertar los datos a articulo movimiento
				$insert->bindValue('cantidad',$articulo_mov->getCantidad());
				$insert->bindValue('valor',$articulo_mov->getValor());
			    $insert->execute();


			}else{
				//tipo de movimiento:Salida
				//valor loc alculamos y lo mostramos“ El valor de la venta es el último costo + 10%

				//seleccionar el producto
				$cos=$db->prepare('SELECT * FROM datos_producto WHERE ID=:id_producto');
				$cos->bindValue('id_producto',$articulo_mov->getId_producto());
				$cos->execute();

				//ingresarlo en una variable de clase producto
				require_once('./clases/producto.php');
				$f = $cos->fetch();
				$producto= new Producto();
				$producto->setCosto_ultimo($f['costo_ultimo']);
				$producto->setStock($f['stock']);

				$res = $producto->getStock()-$articulo_mov->getCantidad();

				if($res >= 0){
					//aumentar 10% al costo ultimo
					$aum = $producto->getCosto_ultimo();
					$aum = $aum*1.1;

					//actualizar el stock del producto
					$insertV=$db->prepare('UPDATE datos_producto SET stock=:res WHERE ID=:id_producto');
					$insertV->bindValue('id_producto',$articulo_mov->getId_producto());
					$insertV->bindValue('res',$res);
					$insertV->execute();

					//insertar los datos a articulo movimiento
					$insert->bindValue('cantidad',$articulo_mov->getCantidad());
					$insert->bindValue('valor',$aum);
			    	$insert->execute();
				}else{

				}
			}

		}
 
		// método para mostrar todos los articulo_mov
		public function mostrar(){
			$db=Db::conectar();
			$listaLinea=[];
			$select=$db->query('SELECT * FROM articulo_movimiento');
 
			foreach($select->fetchAll() as $articulo_movimiento){
				$myArticulo_mov= new Articulo_mov();
				$myArticulo_mov->setId($articulo_movimiento['id']);
				$myArticulo_mov->setId_mov($articulo_movimiento['id_mov']);
				$myArticulo_mov->setId_producto($articulo_movimiento['id_producto']);
				$myArticulo_mov->setCantidad($articulo_movimiento['cantidad']);
				$myArticulo_mov->setValor($articulo_movimiento['valor']);
				$listaArticulo_mov[]=$myArticulo_mov;
			}
			return $listaArticulo_mov;
		}
 
		// método para eliminar un articulo_mov, recibe como parámetro el id del --
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM articulo_movimiento WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un articulo_mov, recibe como parámetro el id del articulo_mov
		public function obtenerArticulo_mov($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM articulo_movimiento WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$articulo_mov=$select->fetch();
			$myArticulo_mov= new Articulo_mov();
			$myArticulo_mov->setId($articulo_mov['id']);
			$myArticulo_mov->setId_mov($articulo_mov['id_mov']);
			$myArticulo_mov->setId_producto($articulo_mov['id_producto']);
			$myArticulo_mov->setCantidad($articulo_mov['cantidad']);
			$myArticulo_mov->setValor($articulo_mov['valor']);
			return $myArticulo_mov;
		}
 
		// método para actualizar un articulo_mov, recibe como parámetro el articulo_mov
		public function actualizar($articulo_mov){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE articulo_movimiento SET id_mov=:id_mov, id_producto=:id_producto, cantidad=:cantidad, valor=:valor WHERE ID=:id');
			$actualizar->bindValue('id',$articulo_mov->getId());
			$actualizar->bindValue('id_mov',$articulo_mov->getId_mov());
			$actualizar->bindValue('id_producto',$articulo_mov->getId_producto());
			$actualizar->bindValue('cantidad',$articulo_mov->getCantidad());
			$actualizar->bindValue('valor',$articulo_mov->getValor());
			$actualizar->execute();
		}
	}
?>