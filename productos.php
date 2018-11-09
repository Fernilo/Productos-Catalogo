<?php 
include("conexion.php");
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$marca=$_POST['marca'];
$talla=$_POST['inlineRadioOptions'];
$fecha=$_POST['fecha'];
$obs=$_POST['obs'];
$fec=explode('/',$fecha);

$nfecha = "{$fec[2]}-{$fec[1]}-{$fec[0]}";
echo $nfecha;

$sql = "INSERT INTO productos(nombre,talla,obs,fechaEmbarque,cantidad,marcas_idmarcas) VALUES ('$nombre','$talla','$obs','$nfecha',$cantidad,$marca)";
mysqli_query($db,$sql);

?>