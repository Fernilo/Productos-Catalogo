<?php 
include("conexion.php");
$nombre=$_POST['nombreMarca'];

$sql="SELECT nombre FROM marcas WHERE nombre='$nombre'";
$rs=mysqli_query($db,$sql);
$r=mysqli_num_rows($rs);
if($r==0){
	$sql="INSERT INTO marcas (nombre) VALUES ('$nombre')";
	mysqli_query($db,$sql);
	 echo '<script>alert("Empresa agregada correctamente");parent.location = "index.php"</script>';
}
else{
	
	    echo '<script>alert("La empresa '.$nombre.' ya existe");parent.location = "index.php"</script>';
}


mysqli_free_result($rs);
mysqli_close($db);

?>