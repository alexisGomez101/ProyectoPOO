<?php

class crearPDF{
public function crearPDF($receta,$des){require "fpdf.php";

class PDF extends FPDF
{

}

//DECLARACION DE HOJA

$pdf = new PDF('P','mm', 'letter');
$pdf->SetMargins(20,18); 
$pdf->AliasNBPages();
$pdf->AddPage();

//Datos TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont("Arial","b",9);
$pdf->Cell(0,4,'RECETA',0,1,'C');

//Conexion
include_once("../class/class_conexion.php");
$conexion = new Conexion();
if($conexion)
	echo "bien";
else
	echo "Mal";

//Mostrar tabla
$pdf->Ln();

$sql = "SELECT * FROM tbl_receta WHERE id_receta = $receta" ;
$resultado = $conexion -> ejecutarInstruccion($sql);
if($resultado)
	echo "bien";
else
	echo "Mal";

	$pdf->cell(30,5,"Receta #",1,0,'C');
	$pdf->cell(30,5,"Descripcion",1,1,'C');

while($fila = $conexion->obtenerFila($resultado) )
{
	$pdf->cell(30,5,$fila["id_receta"],1,0,'C');
	$pdf->cell(30,5,$fila["descripcion"],1,1,'C');
}
$pdf->output('','F');
}

}
?>