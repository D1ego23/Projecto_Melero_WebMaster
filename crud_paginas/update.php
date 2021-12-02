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

$sql="UPDATE paginas SET nompagina='$nompagina',url='$url',fechacreacion='$fechacreacion',propietario='$propietario',correopropietario='$correopropietario',numactualizaciones='$numactualizaciones' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paginas.php");
    }
?>