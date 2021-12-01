<?php
include("conexion.php");
$con=conectar();

$IDhabitacion=$_POST['IDhabitacion'];
$TipoHabitacion=$_POST['TipoHabitacion'];
$Numhabitacion=$_POST['Numhabitacion'];
$precio=$_POST['precio'];



$sql="INSERT INTO habitaciones  VALUES('$IDhabitacion','$TipoHabitacion','$Numhabitacion','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: habitaciones.php");
    
}else {
}
?>