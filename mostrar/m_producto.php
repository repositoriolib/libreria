<?php
//incluye la clase Linea y CrudLinea
require_once('../crud/crud_producto.php');
require_once('../clases/producto.php');
$crud=new CrudProducto();
$producto= new Producto();
//obtiene todos los productos con el método mostrar de la clase crud
$listaProducto=$crud->mostrar();
?>
 
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar Producto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body>
	<div class="imagen">
		<div class=" mb-0 h1 text-white position-relative top-50 text-center">
			<h1 class= "">TABLA DE PRODUCTOS</h1>
		</div>
	</div>
	<div class="container">
		<table class="table table-responsive table-striped table-bordered table-hover">

			<td>Codigo</td>
			<td>Id Linea</td>
			<td>Id Sublinea</td>
			<td>Descripcion</td>
			<td>Costo Ultimo</td>
			<td>Stock</td>
			<td class="text-center" colspan="2">Acciones</td>

			<?php foreach ($listaProducto as $producto) {?>
			<tr>
				<td><?php echo $producto->getCodigo_producto() ?></td>
				<td><?php echo $producto->getId_linea() ?></td>
				<td><?php echo $producto->getId_sublinea() ?></td>
				<td><?php echo $producto->getDescripcion() ?></td>
				<td><?php echo $producto->getCosto_ultimo() ?></td>
				<td><?php echo $producto->getStock() ?></td>
				<td class="text-center"><a href="../actualizar/act_producto.php?id=<?php echo $producto->getId()?>&accion=a" class="btn btn-primary">Actualizar</a> </td>
				<td class="text-center"><a href="../administrar_producto.php?id=<?php echo $producto->getId()?>&accion=e" class="btn btn-primary">Eliminar</a> </td>
			</tr>
			<?php }?>
	</table>
	<a id="link"href="../index.php" class="text-decoration-none ms-3">Volver</a>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>