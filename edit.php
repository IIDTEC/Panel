<?php

	include_once('conexion.php');

	if(isset($_POST['edit'])){
$id			= intval($_POST['id_oficial']);
$nombre	= mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_nombre'], ENT_QUOTES)));
$apellidos  	= mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_apellidos'], ENT_QUOTES)));
$placa		= mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_num_placa'], ENT_QUOTES)));
$cargo  = mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_cargo'], ENT_QUOTES)));
$direccion = mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_direccion'], ENT_QUOTES)));
$pas = mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_password'], ENT_QUOTES)));
$telefono  = mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_telefono'], ENT_QUOTES)));
$tipo = mysqli_real_escape_string($conn,(strip_tags($_POST['tipo_oficial'], ENT_QUOTES)));


$update = mysqli_query($conn, "UPDATE oficial SET oficial_nombre='$nombre', oficial_apellidos='$apellidos', oficial_num_placa='$placa', oficial_cargo='$cargo', oficial_direccion='$direccion', oficial_password='$pas', oficial_telefono='$telefono', tipo_oficial='$tipo' WHERE id_oficial='$id'") or die(mysqli_error($conn));
if($update){
	echo "<script>alert('Los datos han sido actualizados!'); window.location = 'oficiales.php'</script>";
}else{
	echo" <script>alert('Error, no se pudo actualizar los datos'); window.location = 'oficiales.php'</script>";
}




	}

?>