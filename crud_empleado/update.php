<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$fechanac=$_POST['fechanac'];
$experiencia=$_POST['experiencia'];

$sql="UPDATE empleados SET nombre='$nombre',apellidos='$apellidos',correo='$correo',telefono='$telefono',experiencia='$experiencia',fechanac='$fechanac' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>