
<div class="modal fade" id="addnewtab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Agregar Tab</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid">
                
			<form method="POST" action="addtab.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Descripcion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="descripcion">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Articulo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="articulo">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fraccion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fraccion">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Inciso:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="inciso">
					</div>
                </div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Cuota:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cuota">
					</div>
                </div>
                
               
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="addtab" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</a>
			</form>
            </div>

        </div>
    </div>
</div>
