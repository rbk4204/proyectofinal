<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellidopater=$_POST['Apellidopater'];
$Apellidomater=$_POST['Apellidomater'];
$telefono=$_POST['telefono'];
$Fecha_nacimiento=$_POST['Fecha_nacimiento'];
$correoelectronico=$_POST['correoelectronico'];


$sql="INSERT INTO cliente  VALUES('$Nombre','$Apellidopater','$Apellidomater','$telefono','$Fecha_nacimiento',
'$correoelectronico','$IDcliente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>