<?php 
include("conexion.php");
$nombre=$_POST['nombreMarca'];
$num=1;
echo $nombre;
$sql="INSERT INTO marcas (idmarcas,nombre) VALUES ('2','$nombre')";
mysqli_query($db,$sql);



?>