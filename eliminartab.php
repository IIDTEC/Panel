<?php

	
	include_once('conexion.php');

	if(isset($_GET['id_tabulador'])){

		$id_delete = intval($_GET['id_tabulador']);
				$query = mysqli_query($conn, "SELECT * FROM tabulador WHERE id_tabulador='$id_delete'");
				if(mysqli_num_rows($query) == 0){

				}else{
					$delete = mysqli_query($conn, "DELETE FROM tabulador WHERE id_tabulador='$id_delete'");
					if($delete){
						echo "<script>alert('Tab Eliminado!'); window.location = 'tabulador.php'</script>";
						
					}else{
						echo "<script>alert('Error!'); window.location = 'tabulador.php'</script>";
					}
				}
			}

?>