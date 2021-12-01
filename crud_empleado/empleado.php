<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
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
                                    <input type="text" class="form-control mb-3" name="Apellidopat" placeholder="Apellido paterno">
                                    <input type="text" class="form-control mb-3" name="Apellidomat" placeholder="Apellido materno">
                                    <input type="text" class="form-control mb-3" name="numtelef" placeholder="Telefono">
                                    
                                    <input type="submit" class="register"> <a href="/proyecto_gaytan_hotel/index.php">

                                   
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IDempleado</th>
                                        <th>Nombre</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Telefono</th>
                                        <th></th>
                                        <th></th>
                                    </tr>


                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDempleado']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellidopat']?></th>
                                                <th><?php  echo $row['Apellidomat']?></th>
                                                <th><?php  echo $row['numtelef']?></th>    
        
                                                <th><a href="actualizar.php?IDempleado=<?php echo $row['IDempleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?IDempleado=<?php echo $row['IDempleado'] ?>" class="btn btn-danger">Eliminar</a></th>    
                                                                                  
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