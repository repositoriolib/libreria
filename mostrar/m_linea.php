<?php
//incluye la clase Linea y CrudLinea
require_once('../crud/crud_linea.php');
require_once('../clases/linea.php');
$crud=new CrudLinea();
$linea= new Linea();
//obtiene todos las lineas con el método mostrar de la clase crud
$listaLinea=$crud->mostrar();
?>
 
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar Lineas de productos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body>
	<div class="imagen">
		<div class=" mb-0 h1 text-white position-relative top-50 text-center">
			<h1 class= "">TABLA DE LINEAS</h1>
		</div>
	</div>
	<div class="container">
	<table class="table table-responsive table-striped table-bordered table-hover">

			<td>Codigo</td>
			<td>Descripcion</td>
			<td class="text-center" colspan="2">Acciones</td>


			<?php foreach ($listaLinea as $linea) {?>
			<tr>
				<td><?php echo $linea->getCodigo() ?></td>
				<td><?php echo $linea->getDescripcion() ?></td>
				<td class="text-center"><a href="../actualizar/act_linea.php?id=<?php echo $linea->getId()?>&accion=a" class="btn btn-primary">Actualizar</a> </td>
				<td class="text-center"><a href="../administrar_linea.php?id=<?php echo $linea->getId()?>&accion=e" class="btn btn-primary">Eliminar</a> </td>
			</tr>
			<?php }?>
	</table>
	<a id="link"href="../index.php" class="text-decoration-none ms-3">Volver</a>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>