<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=movimiento.xls');

	require '../crud/conexion.php';
	$consulta = "SELECT * FROM movimientos ORDER BY id ASC;";
	$resultado = $conn->query($consulta);

?>

<table>
	<tr>
		<th>Id</th>
		<th>Tipo movimiento</th>
		<th>Cedula</th>
		<th>Nombre</th>
		<th>Fecha</th>
		<th>Valor total</th>
	</tr>
<?php
	while ($fila = mysqli_fetch_assoc($resultado)) {
?>
	<tr>
		<td><?php echo $fila['id'] ?></td>
		<td><?php echo $fila['tipo_mov'] ?></td>
		<td><?php echo $fila['cedula_mov'] ?></td>
		<td><?php echo $fila['nombre_mov'] ?></td>
		<td><?php echo $fila['fecha_mov'] ?></td>
		<td><?php echo $fila['valor_total_mov'] ?></td>
	</tr>

<?php
	}
?>

</table>