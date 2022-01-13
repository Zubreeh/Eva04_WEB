<?php
include("../assets/common/header.php");
?>

<?php
include("../assets/common/bars.php");
?>

<div class="content-page">
		<div class="container-fluid">
			<div class="row">
				<div class="center-col">
					<h1>Mantenedor Productos</h1>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="content">
					<div class="row">
						<label for="NombreProducto">Nombre producto</label>
						<input type="text" class="form-control" id="nombreProducto">
					</div>
					<div  class="row">
						<label for="descProducto">Descripcion</label>
						<textarea type="text" class="form-control" id="descProducto"></textarea>
					</div>
				</div>
					<div class="content">
                    <div class="row">
						<label for="urlIma">URL imagen</label>
						<input type="text" class="form-control" id="urlIma">
					</div>
                    <div class="row">
						<label for="codigo">Codigo</label>
						<input type="text" class="form-control" id="codigo">
					</div>
					<div class="row">
						<button class="btn-black" onClick="enviarProducto()">Guardar</button>
					</div>
                </div>
			</div>
		<br>
		<hr>
            <div class="row">
                <div class="col-md-12">
				<table class="table table-bordered" id="tablaPrMan">
					<thead>
						<tr>
							<th>Nombre producto</th>
							<th>Codigo</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
				</div>
            </div>
		</div>
	</div>


<?php
include("../assets/common/footer.php");
?>