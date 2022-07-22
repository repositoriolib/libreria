<?php
require_once('crud/crud_articulo_mov.php');
require_once('clases/articulo_movimiento.php');
 
$crud  = new CrudArticulo_mov();
$articulo_mov = new Articulo_mov();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un articulo_mov
	if (isset($_POST['insertar'])) {
		$articulo_mov->setId_mov($_POST['id_mov']);
		$articulo_mov->setId_producto($_POST['id_producto']);
		$articulo_mov->setCantidad($_POST['cantidad']);
		$articulo_mov->setValor($_POST['valor']);
		//llama a la función insertar definida en el crud
		$crud->insertar($articulo_mov);
		header('Location: index.php');

	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el articulo_mov
	}elseif(isset($_POST['actualizar'])){
		$articulo_mov->setId($_POST['id']);
		$articulo_mov->setId_mov($_POST['id_mov']);
		$articulo_mov->setId_producto($_POST['id_producto']);
		$articulo_mov->setCantidad($_POST['cantidad']);
		$articulo_mov->setValor($_POST['valor']);
		$crud->actualizar($articulo_mov);
		header('Location: index.php');


	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un articulo_mov
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');
				
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar/act_linea.php');
	}
?>