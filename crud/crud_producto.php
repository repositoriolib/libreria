<?php
//conexion base de datos
require_once('conexion.php');
 
	class CrudProducto{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo producto
		public function insertar($producto){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO datos_producto values(NULL,:codigo_producto,:id_linea,:id_sublinea,:descripcion,:costo_ultimo,:stock)');
			$insert->bindValue('codigo_producto',$producto->getCodigo_producto());
			$insert->bindValue('id_linea',$producto->getId_linea());
			$insert->bindValue('id_sublinea',$producto->getId_sublinea());
			$insert->bindValue('descripcion',$producto->getDescripcion());
			$insert->bindValue('costo_ultimo',$producto->getCosto_ultimo());
			$insert->bindValue('stock',$producto->getStock());
			$insert->execute();
 
		}
 
		// método para mostrar todos los productos
		public function mostrar(){
			$db=Db::conectar();
			$listaProducto=[];
			$select=$db->query('SELECT * FROM datos_producto');
 
			foreach($select->fetchAll() as $producto){
				$myProducto= new Producto();
				$myProducto->setId($producto['id']);
				$myProducto->setCodigo_producto($producto['codigo_producto']);
				$myProducto->setId_linea($producto['id_linea']);
				$myProducto->setId_sublinea($producto['id_sublinea']);
				$myProducto->setDescripcion($producto['descripcion']);
				$myProducto->setCosto_ultimo($producto['costo_ultimo']);
				$myProducto->setStock($producto['stock']);
				$listaProducto[]=$myProducto;
			}
			return $listaProducto;
		}
 
		// método para eliminar un producto, recibe como parámetro el id del producto
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM datos_producto WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			try {
    			$eliminar->execute();
    			header('Location: index.php');
			}catch(exception $e){
				echo '<script language="javascript">alert("No se puede eliminar, el dato que se intenta eliminar es llave foranea en otra tabla, elimine todos los registros que tengan esta llave o cambieles esta llave por otra"); window.history.back();</script>';
			}
		}
 
		// método para buscar un producto, recibe como parámetro el id del producto
		public function obtenerProducto($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM datos_producto WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$producto=$select->fetch();
			$myProducto= new Producto();
			$myProducto->setId($producto['id']);
			$myProducto->setCodigo_producto($producto['codigo_producto']);
			$myProducto->setId_linea($producto['id_linea']);
			$myProducto->setId_sublinea($producto['id_sublinea']);
			$myProducto->setDescripcion($producto['descripcion']);
			$myProducto->setCosto_ultimo($producto['costo_ultimo']);
			$myProducto->setStock($producto['stock']);
			return $myProducto;
		}
 
		// método para actualizar un producto, recibe como parámetro el producto
		public function actualizar($producto){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE datos_producto SET codigo_producto=:codigo_producto, id_linea=:id_linea, id_sublinea=:id_sublinea, descripcion=:descripcion, costo_ultimo=:costo_ultimo, stock=:stock  WHERE ID=:id');
			$actualizar->bindValue('id',$producto->getId());
			$actualizar->bindValue('codigo_producto',$producto->getCodigo_producto());
			$actualizar->bindValue('id_linea',$producto->getId_linea());
			$actualizar->bindValue('id_sublinea',$producto->getId_sublinea());
			$actualizar->bindValue('descripcion',$producto->getDescripcion());
			$actualizar->bindValue('costo_ultimo',$producto->getCosto_ultimo());
			$actualizar->bindValue('stock',$producto->getStock());
			$actualizar->execute();
		}
	}
?>