<?php

include("conexion.php");
$con=conectar();

$IDempleado=$_GET['IDempleado'];
$sql="DELETE FROM reservaciones  WHERE IDempleado='$IDempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: recervaciones.php");
    }
?>
