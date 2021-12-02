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

$sql="UPDATE empleados SET nombre='$nombre',apellidopat='$apellidopat',apellidomat='$apellidomat',direccion='$direccion',correo='$correo',telefono='$telefono',fecha='$fecha' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>