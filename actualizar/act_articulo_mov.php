<?php
//incluye la clase Articulo_mov y crud_articulo
	require_once('../crud/crud_articulo_mov.php');
	require_once('../clases/articulo_movimiento.php');

	$crud= new CrudArticulo_mov();
	$articulo_mov=new Articulo_mov();
	//busca articulo_mov utilizando el id, que es enviado por GET desde la vista mostrar.php
	$articulo_mov=$crud->obtenerArticulo_mov($_GET['id']);

	require_once('../crud/crud_movimiento.php');
    require_once('../crud/crud_producto.php');
	require_once('../clases/movimiento.php');
	require_once('../clases/producto.php');

	$crud_m=new CrudMovimiento();
	$crud_p=new CrudProducto();
	$movimiento= new Movimiento();
	$producto= new Producto();
	//obtiene todos las lineas con el método mostrar de la clase crud
	$listaMovimiento=$crud_m->mostrar();
	$listaProducto=$crud_p->mostrar();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar Movimiento de articulos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body class="fndimg">
	<div class="row row-cols-1 row-cols-md-3 mb-3 container-fluid cnt" >
	<div class="col"></div>
	<form id= "tipo" action='../administrar_articulo_mov.php' method='post' class="card mb-4 rounded-3 shadow-sm border-success">
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $articulo_mov->getId()?>'>
		</tr>
		<tr>
			<td>Movimiento:</td>
			<td><select name='id_mov' class="form-select">
				<option value="<?php echo $articulo_mov->getId_mov()?>">---</option>
				<?php foreach ($listaMovimiento as $movimiento) {?>
					<option value="<?php echo $movimiento->getId() ?>"> <?php echo $movimiento->getId() ?> </option>
				<?php }?>
			</select>
			</td>
			<td><p>Movimiento que tenia <?php echo $articulo_mov->getId_mov()?></p></td>
		</tr>
		<tr>
			<td>Producto:</td>
			<td><select name='id_producto' class="form-select">
				<option value="<?php echo $articulo_mov->getId_producto()?>">---</option>
				<?php foreach ($listaProducto as $producto) {?>
					<option value="<?php echo $producto->getId() ?>"> <?php echo $producto->getId() ?> </option>
				<?php }?>
			</select>
			<td><p>Producto que tenia <?php echo $articulo_mov->getId_producto()?></p></td>
			</td>
		</tr>
		<tr>
			<td>Cantidad:</td>
			<td><input type='number' name='cantidad' value='<?php echo $articulo_mov->getCantidad()?>' class="form-control" required></td>
		</tr>
		<tr>
			<td>Valor:</td>
			<td><input type='number' name='valor' value='<?php echo $articulo_mov->getValor()?>' class="form-control" required></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar' class="w-100 btn btn-primary btn-lg mb-3 mt-3">
	<a href="../index.php" class="text-decoration-none">Volver</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>