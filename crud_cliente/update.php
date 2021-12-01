<?php

include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellidopater=$_POST['Apellidopater'];
$Apellidomater=$_POST['Apellidomater'];
$telefono=$_POST['telefono'];
$Fecha_nacimiento=$_POST['Fecha_nacimiento'];
$correoelectronico=$_POST['correoelectronico'];
$IDcliente=$_POST['IDcliente'];


$sql="UPDATE cliente SET Nombre='$Nombre',Apellidopater='$Apellidopater',Apellidomater='$Apellidomater'
,telefono='$telefono',Fecha_nacimiento='$Fecha_nacimiento',correoelectronico='$correoelectronico', WHERE IDcliente='$IDcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
    Header("Location: cliente.php");
?>