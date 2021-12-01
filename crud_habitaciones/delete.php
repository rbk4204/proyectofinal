<?php

include("conexion.php");
$con=conectar();

$IDhabitacion=$_GET['IDhabitacion'];
$sql="DELETE FROM habitaciones  WHERE IDhabitacion='$IDhabitacion'";


$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: habitaciones.php");
    }
?>
