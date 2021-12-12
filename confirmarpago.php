<?php

	
	include_once('conexion.php');

	if(isset($_GET['id_oficialefectivo'])){

		$id_update = intval($_GET['id_oficialefectivo']);
				$query = mysqli_query($conn, "UPDATE oficial_efectivo SET estado ='Pagado' WHERE id_oficialefectivo='$id_update'");
				if(!$query || mysqli_num_rows($query) == 0){

					$update= mysqli_query($conn,"UPDATE oficial_efectivo SET estado ='Pagado' WHERE id_oficialefectivo='$id_update'");
					if($update){
						echo "<script>alert('pago exitoso!'); window.location = 'pagados.php'</script>";
						
					}else{
						echo "<script>alert('Error!'); window.location = 'confirmar.php'</script>";
					}
				
			}
		}

?>