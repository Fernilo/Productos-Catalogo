<?php
include("conexion.php"); 
$id=$_GET['id'];
//echo $id;
$sql="DELETE FROM marcas WHERE idmarcas='$id'";
mysqli_query($db,$sql);
mysqli_close($db);
header("location:index.php");


?>