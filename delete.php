<?php

	
	include_once('conexion.php');

	if(isset($_GET['id_oficial'])){

		$id_delete = intval($_GET['id_oficial']);
				$query = mysqli_query($conn, "SELECT * FROM oficial WHERE id_oficial='$id_delete'");
				if(mysqli_num_rows($query) == 0){

				}else{
					$delete = mysqli_query($conn, "DELETE FROM oficial WHERE id_oficial='$id_delete'");
					if($delete){
						echo "<script>alert('Oficial Eliminado!'); window.location = 'oficiales.php'</script>";
						
					}else{
						echo "<script>alert('Error!'); window.location = 'oficiales.php'</script>";
					}
				}
			}

?>