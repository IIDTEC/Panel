<?php

	
	include_once('conexion.php');

	if(isset($_POST['add'])){

$nombre	= mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_nombre'], ENT_QUOTES)));
$apellidos  	= mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_apellidos'], ENT_QUOTES)));
$placa		= mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_num_placa'], ENT_QUOTES)));
$cargo  = mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_cargo'], ENT_QUOTES)));
$direccion = mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_direccion'], ENT_QUOTES)));
$pas = mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_password'], ENT_QUOTES)));
$telefono  = mysqli_real_escape_string($conn,(strip_tags($_POST['oficial_telefono'], ENT_QUOTES)));

$hashed = password_hash($pas, PASSWORD_DEFAULT);

$sqlinsert = $conn->query("CALL p_inoff('$nombre','$apellidos','$placa','$cargo','$direccion','$hashed','$telefono','19')");

if ($sqlinsert) {
 
  echo "<script>alert('Oficial Agregado Correctamente!'); window.location = 'oficiales.php'</script>";
} else {
  
  echo "<script>alert('Errrrrrrorrrrrrrrrrrr'!'); window.location = 'oficiales.php'</script>";
}
// $insert = mysqli_query($conn, "INSERT INTO oficial (id_oficial, oficial_nombre, oficial_apellidos, oficial_num_placa, oficial_cargo, oficial_direccion, oficial_password, oficial_telefono, tipo_oficial)
//                   VALUES(NULL,'$nombre', '$apellidos', '$placa', '$cargo', '$direccion', '$pas','$telefono','$tipo')") or die(mysqli_error($conn));
// if($insert){
//   echo "<script>alert('Oficial Agregado Correctamente!'); window.location = 'oficiales.php'</script>";

// }else{
//   echo "<script>alert('Error!'); window.location = 'oficiales.php'</script>";

// }



	}

	
?>