<?php
include("conexion.php");
$con=conectar();

$IDempleado=$_POST['IDempleado'];
$Nombre=$_POST['Nombre'];
$Apellidopat=$_POST['Apellidopat'];
$Apellidomat=$_POST['Apellidomat'];
$numtelef=$_POST['numtelef'];


$sql="INSERT INTO empleado VALUES('$IDempleado','$Nombre','$Apellidopat','$Apellidomat','$numtelef')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>