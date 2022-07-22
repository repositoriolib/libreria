<?php
require_once('crud/crud_linea.php');
require_once('crud/crud_sublinea.php');
require_once('clases/linea.php');
 
$crud  = new CrudLinea();
$crud_s = new CrudSublinea();
$linea = new Linea();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un linea
	if (isset($_POST['insertar'])) {
		$linea->setCodigo($_POST['codigo']);
		$linea->setDescripcion($_POST['descripcion']);
		//llama a la función insertar definida en el crud
		$crud->insertar($linea);
		header('Location: index.php');

	}elseif (isset($_POST['insertar_sub'])) {
		$linea->setCodigo($_POST['codigo']);
		$linea->setDescripcion($_POST['descripcion']);
		//llama a la función insertar definida en el crud
		$crud_s->insertar($linea);
		header('Location: index.php');

	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el linea
	}elseif(isset($_POST['actualizar'])){
		$linea->setId($_POST['id']);
		$linea->setCodigo($_POST['codigo']);
		$linea->setDescripcion($_POST['descripcion']);
		$crud->actualizar($linea);
		header('Location: index.php');

	}elseif(isset($_POST['actualizar_sub'])){
		$linea->setId($_POST['id']);
		$linea->setCodigo($_POST['codigo']);
		$linea->setDescripcion($_POST['descripcion']);
		$crud_s->actualizar($linea);
		header('Location: index.php');

	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un linea
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);

	}elseif ($_GET['accion']=='es') {
		$crud_s->eliminar($_GET['id']);
				
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar/act_linea.php');
	//falta
	}elseif($_GET['accion']=='as'){
		header('Location: actualizar.php');
	}
?>