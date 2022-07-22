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
    		$this->Cell(70,10,'INFORME DE LOS MOVIMIENTOS',1,0,'C');
    		// Salto de línea
    		$this->Ln(25);

    		$this->setX(30);
			$this->cell(12, 10, 'ID', 1, 0, 'C', 0);
			$this->cell(32, 10, 'ID MOVIMIENTO', 1, 0, 'C', 0);
			$this->cell(30, 10, 'ID PRODUCTO', 1,0, 'C', 0);
			$this->cell(38, 10, 'CANTIDAD', 1,0, 'C', 0);
			$this->cell(35, 10, 'VALOR', 1, 1, 'C', 0);
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
	$consulta="SELECT * FROM articulo_movimiento ORDER BY id ASC;";
    $resultado = $conn->query($consulta);

	// Creación del objeto de la clase heredada
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',11);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->setX(30);
		$pdf->cell(12, 10, $row['id'],1, 0, 'C', 0);
		$pdf->cell(32, 10, $row['id_mov'], 1, 0, 'C', 0);
		$pdf->cell(30, 10, $row['id_producto'], 1,0, 'C', 0);
		$pdf->cell(38, 10, $row['cantidad'], 1,0, 'C', 0);
		$pdf->cell(35, 10, $row['valor'], 1, 1, 'C', 0);
	}
$pdf->Output();
?>