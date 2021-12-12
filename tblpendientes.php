<div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">Oficiales Pendientes</h3>

                <div class="card-tools">
                  <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">0</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table table-responsive">
              <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Nombre Oficial</th>
                      <th>Apellido</th>
                      <th>Placa</th>
                      <th>Fecha</th>
                      <th>Total</th>
                      <th> </th>
                    </tr>
                    </thead>

                    <?php
						
						include_once('conexion.php');

				
						try{	
						    $sql = 'CALL sp_pendiente(19)';
						    foreach ($conn->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['oficial_nombre']; ?></td>
						    		<td><?php echo $row['oficial_apellidos']; ?></td>
						    		<td><?php echo $row['oficial_num_placa']; ?></td>
						    		<td><?php echo $row['fecha']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                                   
						    		<td>
						    			<a href="#mesaje_<?php echo $row['id_oficialefectivo']; ?>" class="btn btn-primary btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Aceptar</a>
						    			<?php include('mensaje.php');?>
                                    </td>
                                    
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
            <!-- ./box-body -->
  <div class="card-footer">
            <div class="float-right d-none d-sm-inline-block">
     <a href="#" class="btn btn-primary">>></a>
    </div>
            </div>
           
          </div>
         
        