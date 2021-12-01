<?php 
    include("conexion.php");
    $con=conectar();

$IDcliente=$_GET['IDcliente'];

$sql="SELECT * FROM cliente WHERE IDcliente='$IDcliente'";
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
                    
                                <input type="hidden" name="IDcliente" value="<?php echo $row['IDcliente']  ?>">
    
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellidopater" placeholder="Apellidopater" value="<?php echo $row['Apellidopater']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellidomater" placeholder="Apellidomater" value="<?php echo $row['Apellidomater']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha_nacimiento" placeholder="Fecha_nacimiento" value="<?php echo $row['Fecha_nacimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="correoelectronico" placeholder="correoelectronico" value="<?php echo $row['correoelectronico']  ?>">
                                <input type="text" class="form-control mb-3" name="IDcliente" placeholder="IDcliente" value="<?php echo $row['IDcliente']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>