<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CLIENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellidopat" placeholder="Apellido Paterno">
                                    <input type="text" class="form-control mb-3" name="apellidomat" placeholder="Apellido Materno">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    <input type="email" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                    <input type="submit" class="btn btn-primary">
                                    <li><a href="../index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Direccion</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Fecha</th>
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
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidopat']?></th>
                                                <th><?php  echo $row['apellidomat']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['telefono']?></th>  
                                                <th><?php  echo $row['fecha']?></th>  
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