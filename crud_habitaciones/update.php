<?php

include("conexion.php");
$con=conectar();

$IDhabitacion=$_POST['IDhabitacion'];
$TipoHabitacion=$_POST['TipoHabitacion'];
$Numhabitacion=$_POST['Numhabitacion'];
$precio=$_POST['precio'];


$sql="UPDATE habitaciones SET TipoHabitacion='$TipoHabitacion', Numhabitacion='$Numhabitacion',precio='$precio', WHERE IDhabitacion='$IDhabitacion'";

$query=mysqli_query($con,$sql);

    if($query){
       Header("Location: habitaciones.php");
    }
    
    Header("Location: habitaciones.php");
?>
