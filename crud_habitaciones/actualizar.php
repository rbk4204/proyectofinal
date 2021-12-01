<?php 
    include("conexion.php");
    $con=conectar();

$IDhabitacion=$_GET['IDhabitacion'];

$sql="SELECT * FROM habitaciones WHERE IDhabitacion='$IDhabitacion'";
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
                    
                                <input type="hidden" name="IDhabitacion" value="<?php echo $row['IDhabitacion']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="IDhabitacion" placeholder="IDhabitacion" value="<?php echo $row['IDhabitacion']  ?>">
                                <input type="text" class="form-control mb-3" name="TipoHabitacion" placeholder="TipoHabitacion" value="<?php echo $row['TipoHabitacion']  ?>">
                                <input type="text" class="form-control mb-3" name="Numhabitacion" placeholder="Numhabitacion" value="<?php echo $row['Numhabitacion']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                        
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>