<?php

	include_once('conexion.php');

	if(isset($_POST['editap'])){
$id			= intval($_POST['id_tabulador']);
$descripcion	= mysqli_real_escape_string($conn,(strip_tags($_POST['descripcion'], ENT_QUOTES)));
$articulo  	= mysqli_real_escape_string($conn,(strip_tags($_POST['articulo'], ENT_QUOTES)));
$fraccion		= mysqli_real_escape_string($conn,(strip_tags($_POST['fraccion'], ENT_QUOTES)));
$inciso  = mysqli_real_escape_string($conn,(strip_tags($_POST['inciso'], ENT_QUOTES)));
$cuota = mysqli_real_escape_string($conn,(strip_tags($_POST['cuota'], ENT_QUOTES)));



$update = mysqli_query($conn, "UPDATE tabulador SET descripcion='$descripcion', articulo='$articulo', fraccion='$fraccion', inciso='$inciso', cuota='$cuota' WHERE id_tabulador='$id'") or die(mysqli_error($conn));
if($update){
	echo "<script>alert('Los datos han sido actualizados!'); window.location = 'tabulador.php'</script>";
}else{
	echo" <script>alert('Error, no se pudo actualizar los datos'); window.location = 'tabulador.php'</script>";
}




	}

?>