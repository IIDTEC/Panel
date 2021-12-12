

<div class="modal fade" id="editap_<?php echo $row['id_tabulador']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	 <center><h4 class="modal-title" id="myModalLabel">Editar Tab</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">

			<form method="POST" action="editap.php?id=<?php echo $row['id_tabulador']; ?>">

			<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">#:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_tabulador" value="<?php echo $row['id_tabulador']; ?>">
					</div>
				</div>
			
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Descripcion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcion']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Articulo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="articulo" value="<?php echo $row['articulo']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fraccion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fraccion" value="<?php echo $row['fraccion']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Inciso:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="inciso" value="<?php echo $row['inciso']; ?>">
					</div>
                </div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Cuota:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cuota" value="<?php echo $row['cuota']; ?>">
					</div>
                </div>
               
              
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="editap" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="eliminartab_<?php echo $row['id_tabulador']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Borrar </h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Estas seguro en borrar?</p>
				<h2 class="text-center"><?php echo $row['descripcion'];  ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <a href="eliminartab.php?id_tabulador=<?php echo $row['id_tabulador']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>

