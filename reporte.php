<?php
include 'plantilla.php';
require 'conexion.php';

$query = 'CALL sp_showofi(19)';
$resultado = $conn->query($query);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$i=1;

$pdf->SetFillColor(232,232,232,232);
$pdf->SetFont('Arial','B',12);

$pdf->Cell(10,6,'#',1,0,'C',1);
$pdf->Cell(40,6,'Nombre',1,0,'C',1);
$pdf->Cell(50,6,'Apellidos',1,0,'C',1);
$pdf->Cell(50,6,'Placa',1,0,'C',1);
$pdf->Cell(40,6,'Cargo',1,1,'C',1);

$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc())
{
    
    $pdf->Cell(10,6,utf8_decode($i++),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['oficial_nombre']),1,0,'C');
    $pdf->Cell(50,6,utf8_decode($row['oficial_apellidos']),1,0,'C');
    $pdf->Cell(50,6,utf8_decode($row['oficial_num_placa']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['oficial_cargo']),1,1,'C');
}
$pdf->Output();



?>