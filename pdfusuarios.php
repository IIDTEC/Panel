<?php
include 'plantilla_usuario.php';
require 'conexion.php';

$query = 'SELECT id_usuario, usuario_nombre, usuario_apellidos FROM usuario';
$resultado = $conn->query($query);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$i=1;

$pdf->SetFillColor(232,232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,6,'#',1,0,'C',1);
$pdf->Cell(60,6,'CURP',1,0,'C',1);
$pdf->Cell(60,6,'Nombre',1,0,'C',1);
$pdf->Cell(60,6,'Apellidos',1,1,'C',1);



$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc())
{
    
    $pdf->Cell(10,6,utf8_decode($i++),1,0,'C');
    $pdf->Cell(60,6,utf8_decode($row['id_usuario']),1,0,'C');
    $pdf->Cell(60,6,utf8_decode($row['usuario_nombre']),1,0,'C');
    $pdf->Cell(60,6,utf8_decode($row['usuario_apellidos']),1,1,'C');
   
}
$pdf->Output();




?>