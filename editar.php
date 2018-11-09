<?php 
include("conexion.php");

if(!empty($_POST)){
	
	
	$idCampo=$_POST['idMarca'];
	$nombreCampo=$_POST['nombreMarca'];

	$sqlCampo="SELECT * FROM marcas WHERE nombre ='$nombreCampo'";
	$rsCampo=mysqli_query($db,$sqlCampo);
	$rCampo=mysqli_num_rows($rsCampo);
	if($rCampo > 0){
		echo "<script language='javascript'>";
		echo "alert('La marca ya existe.')";
		echo "</script>";
	}else{

		$sqlUpdate="UPDATE marcas SET nombre='$nombreCampo' WHERE idmarcas=$idCampo";
		$rUpdate=mysqli_query($db,$sqlUpdate);
		if($rUpdate){
			echo "<script language='javascript'>";
			echo "alert('Se actualizo correctamente.');parent.location = 'index.php'";
			//
			echo "</script>";
		}
	}

	
}

if(empty($_GET['id'])){
	header('location:index.php');
	mysqli_close($db);
}
$id=$_GET['id'];
$sql="SELECT * FROM marcas WHERE idmarcas=$id";
$reg=mysqli_query($db,$sql);
$result=mysqli_num_rows($reg);
if($result==0){
	header('location:index.php');
}
else{
	$arreglo=mysqli_fetch_array($reg);
	$nombre=$arreglo['nombre'];
	$id=$arreglo['idmarcas'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Marca</title>
	<link rel="stylesheet" href="css/estilos.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
</head>
<body>
	<div class="offset-md-4">
		<h1>Actualizar Datos</h1>
	</div>
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<form action="" method="post" onsubmit="return validarMarca()">
				<div class="form-group">
					<label for="nombreMarca">Marca</label>
					<input type="hidden" name="idMarca" value="<?php echo $id; ?>">
					<input type="text" name="nombreMarca" value="<?php echo $nombre; ?>" class="form-control" id="nombreMarca">
					
					<input class="btn btn-primary btn-lg btn-block mt-2 " type="submit" value="Guardar">
					
					<div class="alert ocultar" id="ocultar">
						<div class="alert alert-danger" role="alert">
							Debe Ingresar un nombre!
						</div>
					</div>

				</div>
			</form>
		</div>
	</div>
	<script>
		function validarMarca(){
			valor = document.getElementById("nombreMarca").value;
			if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				document.getElementById("ocultar").style.display='block';
				return false;
			}
		}
		
	</script>
</body>
</html>