<?php 
include("conexion.php");
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$marca=$_POST['marca'];
$talla=$_POST['inlineRadioOptions'];
$fecha=$_POST['fecha'];
$obs=$_POST['obs'];
echo $nombre;

$sql="INSERT INTO productos(nombre) VALUES ('$nombre')";
mysqli_query($db,$sql);

?>