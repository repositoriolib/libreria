<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Ingresar Sublinea</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../s.css">
</head>
<body class="fndimg">
	<div class="row row-cols-1 row-cols-md-3 mb-3 container-fluid cnt" >
	<div class="col"></div>
		<form action='../administrar_linea.php' method='post' class="card mb-4 rounded-3 shadow-sm border-success">
		<table>
			<h4 class="text-center">Ingresa los datos de la Sublinea</h4>
				<tr>
					<td class="form-label">Codigo:</td>
					<td> <input type='number' name='codigo' class="form-control"></td>
				</tr>
				<tr>
					<td class="form-label">Descripcion:</td>
					<td><input type='text' name='descripcion' class="form-control"></td>
				</tr>
				<input type='hidden' name='insertar_sub' value='insertar_sub' >
			</table>
			<input type='submit' value='Guardar' class="w-100 btn btn-primary btn-lg mb-3 mt-3">
			<a href="../index.php" class="text-decoration-none">Volver</a>
		</div>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>