


<div class="modal fade" id="edit_<?php echo $row['id_oficial']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	 <center><h4 class="modal-title" id="myModalLabel">Editar Oficial</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">

			<form method="POST" action="edit.php?id=<?php echo $row['id_oficial']; ?>">

			<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">#:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_oficial" value="<?php echo $row['id_oficial']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="oficial_nombre" value="<?php echo $row['oficial_nombre']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Apellidos:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="oficial_apellidos" value="<?php echo $row['oficial_apellidos']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Placa:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="oficial_num_placa" value="<?php echo $row['oficial_num_placa']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Cargo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="oficial_cargo" value="<?php echo $row['oficial_cargo']; ?>">
					</div>
                </div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Direccion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="oficial_direccion" value="<?php echo $row['oficial_direccion']; ?>">
					</div>
                </div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="oficial_password" value="<?php echo $row['oficial_password']; ?>">
					</div>
                </div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Telefono:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="oficial_telefono" value="<?php echo $row['oficial_telefono']; ?>">
					</div>
                </div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Tipo Oficial:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tipo_oficial" value="<?php echo $row['tipo_oficial']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="delete_<?php echo $row['id_oficial']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Borrar </h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Estas seguro en borrar al oficial?</p>
				<h2 class="text-center"><?php echo $row['oficial_nombre'];  ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <a href="delete.php?id_oficial=<?php echo $row['id_oficial']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
