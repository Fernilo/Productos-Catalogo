<?php 
include("conexion.php");
$nombre=$_POST['nombreMarca'];

$sql="SELECT nombre FROM marcas WHERE nombre='$nombre'";
$rs=mysqli_query($db,$sql);
$r=mysqli_num_rows($rs);
if($r==0){
	$sql="INSERT INTO marcas (nombre) VALUES ('$nombre')";
	mysqli_query($db,$sql);
}
else{
	echo "La empresa ".$nombre." ya existe";
}




?>