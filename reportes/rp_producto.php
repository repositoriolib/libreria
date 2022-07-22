<?php
	require('../fpdf/fpdf.php');

	class PDF extends FPDF
	{
		// Cabecera de página
		function Header()
		{
     		//Arial bold 15
    		$this->SetFont('Arial','B',11);
    		// Movernos a la derecha

    		// Título
    		$this->Ln(10);
    		$this->Cell(60);
    		$this->Cell(70,10,'INFORME DEl PRODUCTO',1,0,'C');
    		// Salto de línea
    		$this->Ln(25);

			$this->cell(12, 10, 'ID', 1, 0, 'C', 0);
			$this->cell(40, 10, 'CODIGO PRODUCTO', 1, 0, 'C', 0);
			$this->cell(20, 10, 'ID LINEA', 1,0, 'C', 0);
			$this->cell(28, 10, 'ID SUBLINEA', 1,0, 'C', 0);
			$this->cell(35, 10, 'DESCRIPCION', 1, 0, 'C', 0);
			$this->cell(32, 10, 'COSTO ULTIMO', 1, 0, 'C', 0);
			$this->cell(20, 10, 'STOCK', 1, 1, 'C', 0);
		}

// Pie de página
		function Footer()
		{
    		// Posición: a 1,5 cm del final
    		$this->SetY(-15);
    		// Arial italic 8
    		$this->SetFont('Arial','I',8);
    		// Número de página
    		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}

	require '../crud/conexion.php';
	$consulta="SELECT * FROM datos_producto ORDER BY id ASC;";
    $resultado = $conn->query($consulta);

	// Creación del objeto de la clase heredada
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',11);

	while($row = $resultado->fetch_assoc())
	{

		$pdf->cell(12, 10, $row['id'],1, 0, 'C', 0);
		$pdf->cell(40, 10, $row['codigo_producto'], 1, 0, 'C', 0);
		$pdf->cell(20, 10, $row['id_linea'], 1,0, 'C', 0);
		$pdf->cell(28, 10, $row['id_sublinea'], 1,0, 'C', 0);
		$pdf->cell(35, 10, $row['descripcion'], 1, 0, 'C', 0);
		$pdf->cell(32, 10, $row['costo_ultimo'], 1, 0, 'C', 0);
		$pdf->cell(20, 10, $row['stock'], 1, 1, 'C', 0);
	}
$pdf->Output();
?>