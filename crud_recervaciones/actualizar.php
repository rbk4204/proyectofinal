<?php 
    include("conexion.php");
    $con=conectar();

$IDempleado=$_GET['IDempleado'];

$sql="SELECT * FROM reservaciones WHERE IDempleado='$IDempleado'";
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
                                
                                <input type="text" class="form-control mb-3" name="IDcliente" placeholder="IDcliente" value="<?php echo $row['IDcliente']  ?>">
                                <input type="text" class="form-control mb-3" name="Idhabitaciones" placeholder="Idhabitaciones" value="<?php echo $row['Idhabitaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="diaLlegada" placeholder="diaLlegada" value="<?php echo $row['diaLlegada']  ?>">
                                <input type="text" class="form-control mb-3" name="diaSalida" placeholder="diaSalida" value="<?php echo $row['diaSalida']  ?>">
                                <input type="text" class="form-control mb-3" name="tipohabitacion" placeholder="tipohabitacion" value="<?php echo $row['tipohabitacion']  ?>">
                                <input type="text" class="form-control mb-3" name="tiporembolso" placeholder="tiporembolso" value="<?php echo $row['tiporembolso']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            <a href="/proyecto_gaytan_hote/index.php">
                    </form>
                    
                </div>
    </body>
</html>