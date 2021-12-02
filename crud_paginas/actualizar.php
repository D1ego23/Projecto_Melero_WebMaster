<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM paginas WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nompagina" placeholder="Nombre de la Pagina" value="<?php echo $row['nompagina']  ?>">
                                <input type="text" class="form-control mb-3" name="url" placeholder="URL" value="<?php echo $row['url']  ?>">
                                <input type="date" class="form-control mb-3" name="fechacreacion" placeholder="Fecha de Creacion" value="<?php echo $row['fechacreacion']  ?>">
                                <input type="text" class="form-control mb-3" name="propietario" placeholder="Propietario" value="<?php echo $row['propietario']  ?>">
                                <input type="email" class="form-control mb-3" name="correopropietario" placeholder="Correo del Propietario" value="<?php echo $row['correopropietario']  ?>">
                                <input type="number" class="form-control mb-3" name="numactualizaciones" placeholder="Numero de Actualizaciones"  value="<?php echo $row['numactualizaciones']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>