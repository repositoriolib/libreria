<?php
	require_once('../crud/crud_producto.php');
	require_once('../crud/crud_movimiento.php');
	require_once('../clases/producto.php');
	require_once('../clases/movimiento.php');
	$crud_p=new CrudProducto();
	$crud_m=new CrudMovimiento();
	$producto= new Producto();
	$movimiento= new Movimiento();
	//obtiene todos las lineas con el método mostrar de la clase crud
	$listaProducto=$crud_p->mostrar();
	$listaMovimiento=$crud_m->mostrar();
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Ingresar el Movimiento de articulos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body class="fndimg">

<div class="row row-cols-1 row-cols-md-3 mb-3 container-fluid cnt" >
	<div class="col"></div>
	<form id= "tipo" action='../administrar_articulo_mov.php' method='post' class="card mb-4 rounded-3 shadow-sm border-success">
		<table>
			<h4 class="text-center">Ingresa los datos del movimiento de articulos</h4>
			<tr>
				<td class="form-label">Id Movimiento:</td>
				<td><select id='id_mov' name='id_mov' class="form-select">
						<?php foreach ($listaMovimiento as $movimiento) {?>
							<option value="<?php echo $movimiento->getId() ?>">
								<?php echo "Id:"?> 
								<?php echo $movimiento->getId()?>
								<?php echo "Tipo:"?> 
							    <?php if($movimiento->getTipo_mov()==0)echo "Entrada"?>
							    <?php if($movimiento->getTipo_mov()==1)echo "Salida" ?>	
							</option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="form-label">Id Producto:</td>
				<td><select name='id_producto' class="form-select">
						<?php foreach ($listaProducto as $producto) {?>
							<option value="<?php echo $producto->getId() ?>">
								<?php echo "Id:"?> 
								<?php echo $producto->getId() ?>
								<?php echo "Descripcion:"?>
								<?php echo $producto->getDescripcion() ?>
							</option>
						<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="form-label">Cantidad:</td>
				<td> <input type='number' name='cantidad' class="form-control" required></td>
			</tr>
			<tr>
				<td class="form-label">Valor:</td>
				<td><input type='number' name='valor' class="form-control" required></td>
			</tr>
			<input type='hidden' name='insertar' value='insertar'>
		</table>
		<p class="form-label">Si el movimiento es de salida no se toma en cuenta lo que se escribio en el campo valor ya que eso se calcula automaticamente (costo ultimo del producto + 10%)</p>
		<div id="botona">
		<input type='submit' value='Guardar' class="w-100 btn btn-primary btn-lg mb-3 mt-3">
		<a href="../index.php" class="text-decoration-none">Volver</a>
		</div>
	</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>