<?php
//incluye la clase Linea y CrudLinea
	require_once('../crud/crud_linea.php');
	require_once('../clases/linea.php');
	$crud= new CrudLinea();
	$linea=new Linea();
	//busca la linea utilizando el id, que es enviado por GET desde la vista mostrar.php
	$linea=$crud->obtenerLinea($_GET['id']);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar Linea</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body class="fndimg">
	<div class="row row-cols-1 row-cols-md-3 mb-3 container-fluid cnt" >
	<div class="col"></div>
	<form action='../administrar_linea.php' method='post' class="card mb-4 rounded-3 shadow-sm border-success">
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $linea->getId()?>'>
			<td>Codigo</td>
			<td> <input id="cuadro" type='number' name='codigo' value='<?php echo $linea->getCodigo()?>' class="form-control" required></td>
		</tr>
		<tr>
			<td>Descripcion:</td>
			<td><input id="cuadro" type='text' name='descripcion' value='<?php echo $linea->getDescripcion()?>' class="form-control" required></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar' class="w-100 btn btn-primary btn-lg mb-3 mt-3">
	<a href="../index.php" class="text-decoration-none">Volver</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>