<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM habitaciones";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA HABITACIONES</title>
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

                                
                                    <input type="text" class="form-control mb-3" name="TipoHabitacion" placeholder="TipoHabitacion">
                                    <input type="text" class="form-control mb-3" name="Numhabitacion" placeholder="Numhabitacion">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    
                                    <input type="submit" class="register"><li><a href="/proyecto_gaytan_hotel/index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>

                                        <th>IDhabitacion</th>
                                        <th>Tipo habitacion</th>
                                        <th>Numero de habitacion</th>
                                        <th>Monto Pagado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDhabitacion']?></th>
                                                <th><?php  echo $row['TipoHabitacion']?></th>
                                                <th><?php  echo $row['Numhabitacion']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                
                                                <th><a href="actualizar.php?IDhabitacion=<?php echo $row['IDhabitacion'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?IDhabitacion=<?php echo $row['IDhabitacion'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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