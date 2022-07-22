<?php
//incluye la clase Articulo_mov y CrudArticulo_mov
require_once('../crud/crud_articulo_mov.php');
require_once('../clases/articulo_movimiento.php');
$crud=new CrudArticulo_mov();
$articulo_mov= new Articulo_mov();
//obtiene todos las lineas con el método mostrar de la clase crud
$listaArticulo_mov=$crud->mostrar();
?>
 
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar Movimientos de articulos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body>
	<div class="imagen">
		<div class=" mb-0 h1 text-white position-relative top-50 text-center">
			<h1 class= "">TABLA DE MOVIMIENTOS DE ARTICULOS</h1>
		</div>
	</div>
	<div class="container">
	<table class="table table-responsive table-striped table-bordered table-hover">

			<td>Id Movimiento</td>
			<td>Id Producto</td>
			<td>Cantidad</td>
			<td>Valor</td>
			<td class="text-center" colspan="2">Acciones</td>

			<?php foreach ($listaArticulo_mov as $articulo_mov) {?>
			<tr>
				<td><?php echo $articulo_mov->getId_mov() ?></td>
				<td><?php echo $articulo_mov->getId_producto() ?></td>
				<td><?php echo $articulo_mov->getCantidad() ?></td>
				<td><?php echo $articulo_mov->getValor() ?></td>
				<td class="text-center"><a href="../actualizar/act_articulo_mov.php?id=<?php echo $articulo_mov->getId()?>&accion=a" class="btn btn-primary">Actualizar</a> </td>
				<td class="text-center"><a href="../administrar_articulo_mov.php?id=<?php echo $articulo_mov->getId()?>&accion=e" class="btn btn-primary">Eliminar</a> </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="../index.php" class="text-decoration-none ms-3">Volver</a>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>