<?php 
    include("conexion.php");
    $con=conectar();

$IDempleado=$_GET['IDempleado'];

$sql="SELECT * FROM empleado WHERE IDempleado='$IDempleado'";
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
                    
                                <input type="hidden" name="IDempleado" value="<?php echo $row['IDempleado']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="IDempleado" placeholder="IDempleado" value="<?php echo $row['IDempleado']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellidopat" placeholder="Apellidopat" value="<?php echo $row['Apellidopat']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellidomat" placeholder="Apellidomat" value="<?php echo $row['Apellidomat']  ?>">
                                <input type="text" class="form-control mb-3" name="numtelef" placeholder="numtelef" value="<?php echo $row['numtelef']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>