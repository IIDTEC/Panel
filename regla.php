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
			<a href="#addnew" class="btn btn-success" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
            <h1 align="center">REGLAMENTO</h1>
			</div>

			<style>
				#btns{
					padding-top: 20px;
					padding-bottom: 30px;
				}

			</style>
			
            <?php 
               
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
			?>
	

			
         <div class="table-responsive">     
			<table class="table table-striped" >
				<thead>
					<th >#</th>
					<th>#Muni</th>
					<th>Ruta_Pdf</th>
                    <th></th>
                    <th></th>
                </thead>
                 
                <tr>
                    <td>
                        <span>1</span>
                    </td>
                    <td>
                        <span>5</span>
                    </td>
                    <td>
                        <span>www/ruta/regla.pdf</span>
                    </td>
                    <td>
                        <a href="#" class="btn btn-warning"> <span class="fa fa-edit"></span> Editar</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger"><span class="fa fa-trash"></span> Eliminar</a>
                    </td>
                </tr>
			
			</table>
		 </div>

       

<?php include('agregar.php'); ?>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/custom.js"></script>
</body>
</html>
