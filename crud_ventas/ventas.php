<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA VENTAS</title>
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
                                    <input type="text" class="form-control mb-3" name="cliente" placeholder="Cliente">
                                    <input type="text" class="form-control mb-3" name="metodopago" placeholder="Metodo de Pago">
                                    <input type="text" class="form-control mb-3" name="factura" placeholder="Factura">
                                    <input type="text" class="form-control mb-3" name="productos" placeholder="Productos">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                    <input type="text" class="form-control mb-3" name="vendedor" placeholder="Vendedor">
                                    <input type="number" class="form-control mb-3" name="total" placeholder="Total">
                                    <input type="submit" class="btn btn-primary">
                                    <li><a href="../index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Cliente</th>
                                        <th>Productos</th>
                                        <th>Metodo de Pago</th>
                                        <th>Factura</th>
                                        <th>Vendedor</th>
                                        <th>Fecha</th>
                                        <th>Total</th>
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
                                                <th><?php  echo $row['cliente']?></th>
                                                <th><?php  echo $row['productos']?></th>
                                                <th><?php  echo $row['metodopago']?></th>
                                                <th><?php  echo $row['factura']?></th>
                                                <th><?php  echo $row['vendedor']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['total']?></th>          
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