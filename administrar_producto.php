<?php
require_once('crud/crud_producto.php');
require_once('clases/producto.php');
 
$crud  = new CrudProducto();
$producto = new Producto();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un producto
	if (isset($_POST['insertar'])) {
		$producto->setCodigo_producto($_POST['codigo_producto']);
		$producto->setId_linea($_POST['id_linea']);
		$producto->setId_sublinea($_POST['id_sublinea']);
		$producto->setDescripcion($_POST['descripcion']);
		$producto->setCosto_ultimo($_POST['costo_ultimo']);
		$producto->setStock($_POST['stock']);
		//llama a la función insertar definida en el crud
		$crud->insertar($producto);
		header('Location: index.php');


	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el producto
	}elseif(isset($_POST['actualizar'])){
		$producto->setId($_POST['id']);
		$producto->setCodigo_producto($_POST['codigo_producto']);
		$producto->setId_linea($_POST['id_linea']);
		$producto->setId_sublinea($_POST['id_sublinea']);
		$producto->setDescripcion($_POST['descripcion']);
		$producto->setCosto_ultimo($_POST['costo_ultimo']);
		$producto->setStock($_POST['stock']);
		$crud->actualizar($producto);
		header('Location: index.php');

	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un producto
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);

				
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar/act_linea.php');
	}
?>