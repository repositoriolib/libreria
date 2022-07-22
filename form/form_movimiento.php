<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Ingresar Movimiento</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body class="fndimg">

<div class="row row-cols-1 row-cols-md-3 mb-3 container-fluid cnt" >
	<div class="col"></div>
		<form id= "tipo" action='../administrar_movimiento.php' method='post' class="card mb-4 rounded-3 shadow-sm border-success">
		<table>
			<h4 class="text-center">Ingresa los datos del Movimiento</h4>
				<tr>
					<td class="form-label">Tipo:</td>
					<td><select name="tipo_mov" class="form-select">
						<option value="0">Entrada</option>
						<option value="1">Salida</option>
					</select></td>
				</tr>
				<tr>
					<td class="form-label">Cedula:</td>
					<td><input type='number' name='cedula_mov' class="form-control" required></td>
				</tr>
				<tr>
					<td class="form-label">Nombre:</td>
					<td><input type='text' name='nombre_mov' class="form-control" required></td>
				</tr>
				<tr>
					<td class="form-label">Fecha:</td>
					<td><input type='date' name='fecha_mov' class="form-control" required></td>
				</tr>
				<tr>
					<td class="form-label">Valor total:</td>
					<td><input type='number' name='valor_total_mov' class="form-control" required></td>
				</tr>
				<input type='hidden' name='insertar' value='insertar'>
			</table>
			<input type='submit' value='Guardar' class="w-100 btn btn-primary btn-lg mb-3 mt-3">
			<a href="../index.php" class="button text-decoration-none">Volver</a>
		</form>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>