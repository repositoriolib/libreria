<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Administrar Inventario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="s.css">
</head>

<body>

	<div class="imagen">
		<div class=" mb-0 h1 text-white position-relative top-50 text-center">
			<h1 class= "">CONTROL DE INVENTARIOS</h1>
		</div>
	</div>

	<div class="row row-cols-1 row-cols-md-3 mb-3 text-center container-fluid position-absolute top-50">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-success">
          <div class="card-header py-3 text-white bg-success border-success">
            <h4 class="my-0 fw-normal">Ingresar datos</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4 text-start">
              <li><a class="text-decoration-none" href="form/form_linea.php">Linea</a></li>
              <li><a class="text-decoration-none" href="form/form_sublinea.php">Sublinea</a></li>
              <li><a class="text-decoration-none" href="form/form_producto.php">Producto</a></li>
              <li><a class="text-decoration-none" href="form/form_movimiento.php">Movimiento</a></li>
              <li><a class="text-decoration-none" href="form/form_articulo.php" >Movimientos de articulos</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-warning">
          <div class="card-header py-3 text-white bg-warning border-warning">
            <h4 class="my-0 fw-normal">Mostrar Datos</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4 text-start">
              <li><a class="text-decoration-none"href="mostrar/m_linea.php">Mostrar Linea</a></li>
              <li><a class="text-decoration-none"href="mostrar/m_sublinea.php">Mostrar Sublinea</a></li>
              <li><a class="text-decoration-none"href="mostrar/m_producto.php">Mostrar Productos</a></li>
              <li><a class="text-decoration-none"href="mostrar/m_movimiento.php">Mostrar Movimientos</a></li>
              <li><a class="text-decoration-none"href="mostrar/m_articulo_movimiento.php">Mostrar Movimientos de articulos</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Reportes</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">PDF</h3>
            <ul class="list-unstyled mt-3 mb-4 text-start">
              <li><a class="text-decoration-none"href="reportes/rp_producto.php">Reporte producto</a></li>
              <li><a class="text-decoration-none"href="reportes/rp_movimiento.php">Reporte movimientos</a></li>
              <li><a class="text-decoration-none"href="reportes/rp_articulo_mov.php">Reporte movimientos de productos</a></li>
            </ul>

            <!--<h3 class="card-title pricing-card-title">EXCEL</h3>
            <ul class="list-unstyled mt-3 mb-4 text-start">
              <li><a class="text-decoration-none"href="reportes/re_producto.php">Reporte producto</a></li>
              <li><a class="text-decoration-none"href="reportes/re_movimiento.php">Reporte movimientos</a></li>
              <li><a class="text-decoration-none"href="reportes/re_articulo_mov.php">Reporte movimientos de productos</a></li>
            </ul>-->
          </div>
        </div>
      </div>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>