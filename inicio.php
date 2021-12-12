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
			<a href="#addnew" class="btn btn-info" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
            <h1 align="center">OFICIALES</h1>
			</div>

			<style>
				#btns{
					padding-top: 20px;
					padding-bottom: 30px;
				}

			</style>
		
	

			
         <div  id="lookup" class="table-responsive">     
			<table class="table table-striped" >
				<thead>
					<th>#</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Placa</th>
					<th>cargo</th>
                    <th>Direccion</th>
                   <th>Telefono</th>
                    <th>Tipo</th>
                    <th></th>
                    <th></th>
				</thead>
				
                <?php
						
						include_once('conexion.php');
                        $i=1;
				
						try{	
						    $sql = 'CALL sp_showofi(19)';
						    foreach ($conn->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $i++; ?></td>
						    		<td><?php echo $row['oficial_nombre']; ?></td>
						    		<td><?php echo $row['oficial_apellidos']; ?></td>
						    		<td><?php echo $row['oficial_num_placa']; ?></td>
                                    <td><?php echo $row['oficial_cargo']; ?></td>
                                    <td><?php echo $row['oficial_direccion']; ?></td>
                                   
                                    <td><?php echo $row['oficial_telefono']; ?></td>
                                    <td><?php echo $row['tipo_oficial']; ?></td>
						    		<td>
						    			<a href="#edit_<?php echo $row['id_oficial']; ?>" class="btn btn-outline-primary btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
						    			
                                    </td>
                                    <td><a href="#delete_<?php echo $row['id_oficial']; ?>" class="btn btn-outline-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a></td>
						    		<?php include('editar.php'); ?>
                                </tr>
                                <?php include('agregar.php'); ?>
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "Error en la conexion: 776690" . $e->getMessage();
						}

						
					

					?>
			
			</table>
		 </div>

		 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#lookup").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
       

<?php include('agregar.php'); ?>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>
