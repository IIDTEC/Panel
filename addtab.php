<?php

	
	include_once('conexion.php');

if(isset($_POST['addtab'])){

$descripcion= mysqli_real_escape_string($conn,(strip_tags($_POST['descripcion'], ENT_QUOTES)));
$articulo 	= mysqli_real_escape_string($conn,(strip_tags($_POST['articulo'], ENT_QUOTES)));
$fraccion		= mysqli_real_escape_string($conn,(strip_tags($_POST['fraccion'], ENT_QUOTES)));
$inciso  = mysqli_real_escape_string($conn,(strip_tags($_POST['inciso'], ENT_QUOTES)));
$cuota = mysqli_real_escape_string($conn,(strip_tags($_POST['cuota'], ENT_QUOTES)));


$s = $conn->query("CALL sp_insertabulador('19','$descripcion','$articulo','$fraccion','$inciso','$cuota')");

if ($s) {
  echo "<script>alert('Tab Agregado Correctamente!'); window.location = 'tabulador.php'</script>";
} else {
  
  echo "<script>alert('Errrrrrrorrrrrrrrrrrr'!'); window.location = 'tabulador.php'</script>";
}




	}

	
?>