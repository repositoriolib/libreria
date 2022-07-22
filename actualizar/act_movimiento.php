<?php
//incluye la clase Movimiento y CrudMovimiento
	require_once('../crud/crud_movimiento.php');
	require_once('../clases/movimiento.php');

	$crud=new CrudMovimiento();
	$movimiento= new Movimiento();
	//busca la movimiento utilizando el id, que es enviado por GET desde la vista mostrar.php
	$movimiento=$crud->obtenerMovimiento($_GET['id']);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar Movimiento</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body class="fndimg">
	<div class="row row-cols-1 row-cols-md-3 mb-3 container-fluid cnt" >
	<div class="col"></div>
	<form id= "tipo" action='../administrar_movimiento.php' method='post' class="card mb-4 rounded-3 shadow-sm border-success">
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $movimiento->getId()?>'>
		<tr>
			<td>Tipo de Movimiento:</td>
			<td>
				<select name="tipo_mov" class="form-select">
					<option value="<?php echo $movimiento->getTipo_mov()?>">---</option>
					<option value='0'>Entrada</option>
					<option value='1'>Salida</option>
				</select>
		    </td>
		    <td><p>Tipo de movimiento que era <?php echo $movimiento->getTipo_mov()?></p></td>
		</tr>
		<tr>
			<td>Cedula:</td>
			<td><input type='number' name='cedula_mov' value='<?php echo $movimiento->getCedula_mov()?>' class="form-control" required></td>
		</tr>
		<tr>
			<td>Nombre:</td>
			<td><input type='text' name='nombre_mov' value='<?php echo $movimiento->getNombre_mov()?>' class="form-control" required></td>
		</tr>
		<tr>
			<td>Fecha:</td>
			<td><input type='date' name='fecha_mov' value='<?php echo $movimiento->getFecha_mov()?>' class="form-control" required></td>
		</tr>
		<tr>
			<td>Valor total:</td>
			<td><input type='int' name='valor_total_mov' value='<?php echo $movimiento->getValor_total_mov()?>' class="form-control" required></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar' class="w-100 btn btn-primary btn-lg mb-3 mt-3">
	<a href="../index.php" class="text-decoration-none">Volver</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>