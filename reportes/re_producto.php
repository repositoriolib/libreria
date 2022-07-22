<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=producto.xls');

	require '../crud/conexion.php';
	$consulta = "SELECT * FROM datos_producto ORDER BY id ASC;";
	$resultado = $conn->query($consulta);

?>

<table>
	<tr>
		<th>Id</th>
		<th>Codigo producto</th>
		<th>Id linea</th>
		<th>Id sublinea</th>
		<th>Descripcion</th>
		<th>Costo ultimo</th>
		<th>Stock</th>
	</tr>
<?php
	while ($fila = mysqli_fetch_assoc($resultado)) {
?>
	<tr>
		<td><?php echo $fila['id'] ?></td>
		<td><?php echo $fila['codigo_producto'] ?></td>
		<td><?php echo $fila['id_linea'] ?></td>
		<td><?php echo $fila['id_sublinea'] ?></td>
		<td><?php echo $fila['descripcion'] ?></td>
		<td><?php echo $fila['costo_ultimo'] ?></td>
		<td><?php echo $fila['stock'] ?></td>
	</tr>

<?php
	}
?>

</table>