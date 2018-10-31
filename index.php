<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogo de productos</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
				<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
				 Agregar Marcas
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Marca nueva</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      		<form action="" onsubmit="return validar()">
					      		<div class="form-group">
								   <label for="nombreMarca">Marca</label>
								   <input type="text" class="form-control" id="nombreMarca" placeholder="Nombre de la Marca">
								   <input class="btn btn-danger mt-2 offset-md-8 ml-6" type="reset" value="Reset">
								   <input class="btn btn-primary mt-2 " type="submit" value="Guardar">
								</div>
				      		</form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
				 Agregar Productos
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function validar(){
			valor = document.getElementById("nombreMarca").value;
			if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				alert("Debe ingresar un nombre");
  			return false;
			}
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>