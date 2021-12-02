<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nompagina=$_POST['nompagina'];
$url=$_POST['url'];
$fechacreacion=$_POST['fechacreacion'];
$propietario=$_POST['propietario'];
$correopropietario=$_POST['correopropietario'];
$numactualizaciones=$_POST['numactualizaciones'];

$sql="INSERT INTO paginas VALUES('$id','$nompagina','$url','$fechacreacion','$propietario','$correopropietario','$numactualizaciones')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: paginas.php");
    
}else {
}
?>