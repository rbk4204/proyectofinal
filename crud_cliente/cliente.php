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
        <title> PAGINA ALUMNO</title>
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

        
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Apellidopater" placeholder="Apellidopater">
                                    <input type="text" class="form-control mb-3" name="Apellidomater" placeholder="Apellidomater">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    <input type="text" class="form-control mb-3" name="Fecha_nacimiento" placeholder="Fecha_nacimiento">
                                    <input type="text" class="form-control mb-3" name="correoelectronico" placeholder="correoelectronico">
                                    
                                    <input type="submit" class="register"><li><a href="/proyecto_gaytan_hotel/index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>

                                        
                                        <th>Nombre</th>
                                        <th>Apellidopater</th>
                                        <th>Apellidomater</th>
                                        <th>telefono</th>
                                        <th>Fecha_nacimiento</th>
                                        <th>correoelectronico</th>
                                       <th>IDcliente</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellidopater']?></th>
                                                <th><?php  echo $row['Apellidomater']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['Fecha_nacimiento']?></th>
                                                <th><?php  echo $row['correoelectronico']?></th>
                                                <th><?php  echo $row['IDcliente']?></th>
                                                
                                                
                                                <th><a href="actualizar.php?IDcliente=<?php echo $row['IDcliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?IDcliente=<?php echo $row['IDcliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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