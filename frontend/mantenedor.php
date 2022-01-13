<?php
include("assets/common/header.php");
?>

<?php
include("assets/common/bars.php");
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
						<input type="text" class="form-control" id="NombreProducto">
					</div>
					<div  class="row">
						<label for="DescProducto">Descripcion</label>
						<textarea type="text" class="form-control" id="DescProducto"></textarea>
					</div>
				</div>
					<div class="content">
                    <div class="row">
						<label for="UrlIma">URL imagen</label>
						<input type="text" class="form-control" id="UrlIma">
					</div>
                    <div class="row">
						<label for="Codigo">Codigo</label>
						<input type="text" class="form-control" id="Codigo">
					</div>
					<div class="row">
						<button class="btn-black">Guardar</button>
					</div>
                    </div>
			</div>
		</div>
	</div>


<?php
include("assets/common/footer.php");
?>