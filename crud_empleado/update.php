<?php

include("conexion.php");
$con=conectar();

$IDempleado=$_POST['IDempleado'];
$Nombre=$_POST['Nombre'];
$Apellidopat=$_POST['Apellidopat'];
$Apellidomat=$_POST['Apellidomat'];
$numtelef=$_POST['numtelef'];

$sql="UPDATE empleado SET Nombre='$Nombre',Apellidopat='$Apellidopat'
,Apellidomat='$Apellidomat', numtelef='$numtelef' WHERE IDempleado='$IDempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }

    Header("Location: empleado.php");
?>