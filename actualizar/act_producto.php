<?php
//incluye la clase Producto y CrudProducto
	require_once('../crud/crud_producto.php');
	require_once('../clases/producto.php');

	$crud= new CrudProducto();
	$producto=new Producto();
	//busca la producto utilizando el id, que es enviado por GET desde la vista mostrar.php
	$producto=$crud->obtenerProducto($_GET['id']);

	require_once('../crud/crud_linea.php');
    require_once('../crud/crud_sublinea.php');
	require_once('../clases/linea.php');

	$crud=new CrudLinea();
	$crud_s=new CrudSublinea();
	$linea= new Linea();
	$sublinea= new Linea();
	//obtiene todos las lineas con el método mostrar de la clase crud
	$listaLinea=$crud->mostrar();
	$listaSub=$crud_s->mostrar();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar Producto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body class="fndimg">
	<div class="row row-cols-1 row-cols-md-3 mb-3 container-fluid cnt" >
	<div class="col"></div>
	<form  id= "tipo" action='../administrar_producto.php' method='post' class="card mb-4 rounded-3 shadow-sm border-success">
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $producto->getId()?>'>
			<td>Codigo:</td>
			<td> <input type='number' name='codigo_producto' value='<?php echo $producto->getCodigo_producto()?>' class="form-control" required></td>
		</tr>
		<tr>
			<td>Linea:</td>
			<td><select name='id_linea' class="form-select">
				<option value="<?php echo $producto->getId_linea()?>">---</option>
				<?php foreach ($listaLinea as $linea) {?>
					<option value="<?php echo $linea->getId() ?>"> <?php echo $linea->getId() ?> </option>
				<?php }?>
			</select>
			</td>
			<td><p>Linea que tenia <?php echo $producto->getId_linea()?></p></td>
		</tr>
		<tr>
			<td>Sublinea:</td>
			<td><select name='id_sublinea' class="form-select">
				<option value="<?php echo $producto->getId_sublinea()?>">---</option>
				<?php foreach ($listaSub as $sublinea) {?>
					<option value="<?php echo $sublinea->getId() ?>"> <?php echo $sublinea->getId() ?> </option>
				<?php }?>
			</select>
			<td><p>Sublinea que tenia <?php echo $producto->getId_sublinea()?></p></td>
			</td>
		</tr>
		<tr>
			<td>Descripcion:</td>
			<td><input type='text' name='descripcion' value='<?php echo $producto->getDescripcion()?>' class="form-control" required></td>
		</tr>
		<tr>
			<td>Costo ultimo:</td>
			<td><input type='number' name='costo_ultimo' value='<?php echo $producto->getCosto_ultimo()?>' class="form-control" required></td>
		</tr>
		<tr>
			<td>Stock:</td>
			<td><input type='number' name='stock' value='<?php echo $producto->getStock()?>' class="form-control" required></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar' class="w-100 btn btn-primary btn-lg mb-3 mt-3">
	<a href="../index.php" class="text-decoration-none">Volver</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>