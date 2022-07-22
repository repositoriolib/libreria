<?php
require_once('crud/crud_movimiento.php');
require_once('clases/movimiento.php');
 
$crud  = new CrudMovimiento();
$movimiento = new Movimiento();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un movimiento
	if (isset($_POST['insertar'])) {
		$movimiento->setTipo_mov($_POST['tipo_mov']);
		$movimiento->setCedula_mov($_POST['cedula_mov']);
		$movimiento->setNombre_mov($_POST['nombre_mov']);
		$movimiento->setFecha_mov($_POST['fecha_mov']);
		$movimiento->setValor_total_mov($_POST['valor_total_mov']);
		//llama a la función insertar definida en el crud
		$crud->insertar($movimiento);
		header('Location: index.php');


	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el movimiento
	}elseif(isset($_POST['actualizar'])){
		$movimiento->setId($_POST['id']);
		$movimiento->setTipo_mov($_POST['tipo_mov']);
		$movimiento->setCedula_mov($_POST['cedula_mov']);
		$movimiento->setNombre_mov($_POST['nombre_mov']);
		$movimiento->setFecha_mov($_POST['fecha_mov']);
		$movimiento->setValor_total_mov($_POST['valor_total_mov']);
		$crud->actualizar($movimiento);
		header('Location: index.php');

	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un movimiento
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);

				
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar/act_linea.php');
	}
?>