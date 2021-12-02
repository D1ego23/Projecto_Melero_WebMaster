<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$cliente=$_POST['cliente'];
$metodopago=$_POST['metodopago'];
$factura=$_POST['factura'];
$total=$_POST['total'];
$productos=$_POST['productos'];
$fecha=$_POST['fecha'];
$vendedor=$_POST['vendedor'];

$sql="UPDATE ventas SET cliente='$cliente',metodopago='$metodopago',factura='$factura',total='$total',productos='$productos',fecha='$fecha',vendedor='$vendedor' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>