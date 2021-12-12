<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.css">
</head>
<body>
	
	        <div id="btns">
			<a href="#addnewtab" class="btn btn-info" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
			
			<h1 align="center">TABULADOR</h1>
			</div>
			

			<style>
				#btns{
					padding-top: 20px;
					padding-bottom: 30px;
				}

			</style>
		
	

			
         <div class="table-responsive">     
			<table class="table table-striped" >
				<thead>
					<th>#</th>
					<th>Descripcion</th>
					<th>articulo</th>
					<th>Fracción</th>
					<th>Inciso</th>
                    <th>Cuota</th>
                    <th></th>
                    <th></th>
				</thead>
				
                <?php
						
                        include_once('conexion.php');
                      $i=1;

				
						try{	
						    $sql = 'CALL sp_taboficial(19)';
						    foreach ($conn->query($sql) as $row) {
						    	?>
						    	<tr>
									
								  <td><?php echo $i++; ?></td>
						    		<td><?php echo $row['descripcion']; ?></td>
						    		<td><?php echo $row['articulo']; ?></td>
						    		<td><?php echo $row['fraccion']; ?></td>
                                    <td><?php echo $row['inciso']; ?></td>
                                    <td><?php echo $row['cuota']; ?></td>
                                
						    		<td>
						    			<a href="#editap_<?php echo $row['id_tabulador']; ?>" class="btn btn-outline-primary btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
										<?php include('editartab.php'); ?>
                                    </td>
                                    <td><a href="#eliminartab_<?php echo $row['id_tabulador']; ?>" class="btn btn-outline-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a></td>
									<?php include('agregartab.php'); ?>
                                </tr>
                               
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "Error en la conexion: 776690" . $e->getMessage();
						}

						
					

					?>
			
			</table>
		 </div>

       

<?php include('agregar.php'); ?>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/custom.js"></script>
</body>
</html>
