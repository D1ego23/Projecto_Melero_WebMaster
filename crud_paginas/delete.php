<?php

include("conexion.php");
$con=conectar();
$id=$_GET['id'];

$sql="DELETE FROM paginas  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paginas.php");
    }
?>
