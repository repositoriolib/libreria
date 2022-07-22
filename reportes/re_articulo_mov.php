<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=movimientos_de_productos.xls');

	require '../crud/conexion.php';
	$consulta = "SELECT * FROM articulo_movimiento ORDER BY id ASC;";
	$resultado = $conn->query($consulta);

?>

<table>
	<tr>
		<th>Id</th>
		<th>Id movimiento</th>
		<th>Id producto</th>
		<th>Cantidad</th>
		<th>Valor</th>
	</tr>
<?php
	while ($fila = mysqli_fetch_assoc($resultado)) {
?>
	<tr>
		<td><?php echo $fila['id'] ?></td>
		<td><?php echo $fila['id_mov'] ?></td>
		<td><?php echo $fila['id_producto'] ?></td>
		<td><?php echo $fila['cantidad'] ?></td>
		<td><?php echo $fila['valor'] ?></td>
	</tr>

<?php
	}
?>

</table>