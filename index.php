<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogo de productos</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 formato-h1">
				<h1>Bienvenido!!!</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 formato-h2">
				<h2>Seleccione lo que desea agregar</h2>
			</div>
		</div>
		<br><br><br><br><br>
		<div class="row">
			<div class="col-md-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#ModalMarcas">
					Agregar Marcas
				</button>

				<!-- Modal -->
				<div class="modal fade" id="ModalMarcas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Marca nueva</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="marca.php" method="post" onsubmit="return validarMarca()">
									<div class="form-group">
										<label for="nombreMarca">Marca</label>
										<input type="text" name="nombreMarca" class="form-control" id="nombreMarca" placeholder="Nombre de la Marca">
										<input class="btn btn-danger mt-2 offset-md-8 ml-6" type="reset" value="Reset">
										<input class="btn btn-primary mt-2 " type="submit" value="Guardar">
										<div class="alert ocultar" id="ocultar1">
											<div class="alert alert-danger" role="alert">
												Debe Ingresar un nombre!
											</div>
										</div>
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#ModalProductos">
					Agregar Productos
				</button>

				<!-- Modal -->
				<div class="modal fade" id="ModalProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="" onsubmit="return validarProducto()">
									<div class="form-group">
										<label for="nombreProducto">Producto</label>
										<input type="text" class="form-control" id="nombreProducto" placeholder="Nombre del producto">
										<div class="alert ocultar" id="ocultar2">
											<div class="alert alert-danger" role="alert">
												Debe Ingresar un nombre!
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="cantidad">Cantidad</label>
										<input type="text" class="form-control" id="cantidad"	placeholder="Cantidad">
										<div class="alert ocultar" id="ocultar3">
											<div class="alert alert-danger" role="alert">
												Debe Ingresar una cantidad
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect1">Marca</label>
										<select class="form-control" id="combo-box">
											<option selected="" disabled="" value="">Marca</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Talla</label>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
											<label class="form-check-label" for="inlineRadio1">S</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
											<label class="form-check-label" for="inlineRadio2">M</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
											<label class="form-check-label" for="inlineRadio3">L</label>
										</div>


									</div>
									<div class="form-group">
										<label for="">Fecha Embarque</label>
										<div class="input-group date fecha">
											<input type="text" class="form-control"><span class="input-group-addon"><i class="calendar-alt"></i></span>
										</div>
									</div>
									
									<div class="form-group">
										<label for="nombreProducto">Observaciones</label>
										<textarea name="obs" id="obs" class="form-control" placeholder="Observaciones"></textarea>
									</div>

									<input class="btn btn-danger mt-2 offset-md-8 ml-6" type="reset" value="Reset">
									<input class="btn btn-primary mt-2 " type="submit" value="Guardar">
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function validarMarca(){
			valor = document.getElementById("nombreMarca").value;
			if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				document.getElementById("ocultar1").style.display='block';
				return false;
			}
		}
		function validarProducto(){
			nombre = document.getElementById("nombreProducto").value;
			cantidad=document.getElementById("cantidad").value;
			if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
				document.getElementById("ocultar2").style.display='block';
				return false;
			}
			if(cantidad== null || cantidad.length == 0 || /^\s+$/.test(cantidad) ) {
				document.getElementById("ocultar3").style.display='block';
				return false;
			}
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script>
		$('.fecha').datepicker({
			format: "dd/mm/yyyy"
		});
	</script>
</body>
</html>