<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidopat=$_POST['apellidopat'];
$apellidomat=$_POST['apellidomat'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO cliente VALUES('$id','$nombre','$apellidomat','$apellidopat','$direccion','$correo','$telefono','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>