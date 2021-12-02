<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM paginas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA PAGINAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="id" placeholder="Id">
                                    <input type="text" class="form-control mb-3" name="nompagina" placeholder="Nombre de la Pagina">
                                    <input type="text" class="form-control mb-3" name="url" placeholder="URL">
                                    <input type="date" class="form-control mb-3" name="fechacreacion" placeholder="Fecha de Creacion">
                                    <input type="text" class="form-control mb-3" name="propietario" placeholder="Propietario">
                                    <input type="email" class="form-control mb-3" name="correopropietario" placeholder="Correo del Propietario">
                                    <input type="number" class="form-control mb-3" name="numactualizaciones" placeholder="Numero de Actualizaciones">
                                    <input type="submit" class="btn btn-primary">
                                    <li><a href="../index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre de la Pagina</th>
                                        <th>URL</th>
                                        <th>Fecha de Creacion</th>
                                        <th>Propietario</th>
                                        <th>Correo del Propietario</th>
                                        <th>Numero de Actualizaciones</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nompagina']?></th>
                                                <th><?php  echo $row['url']?></th>
                                                <th><?php  echo $row['fechacreacion']?></th>
                                                <th><?php  echo $row['propietario']?></th>   
                                                <th><?php  echo $row['correopropietario']?></th>  
                                                <th><?php  echo $row['numactualizaciones']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>