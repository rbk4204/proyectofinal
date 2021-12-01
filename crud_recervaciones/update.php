<?php

include("conexion.php");
$con=conectar();

$IDempleado=$_POST['IDempleado'];
$IDcliente=$_POST['IDcliente'];
$IDhabitaciones=$_POST['Idhabitaciones'];
$diaLlegada=$_POST['diaLlegada'];
$diaSalida=$_POST['diaSalida'];
$tipohabitaciones=$_POST['tipohabitacion'];
$tiporembolso=$_POST['tiporembolso'];


$sql="UPDATE reservaciones SET IDcliente='$IDcliente',Idhabitaciones='$Idhabitaciones',
 diaLlegada='$diaLlegada', diasalida='$diasalida', tipohabitacion='$tipohabitacion', tiporembolso='$tiporembolso' WHERE IDempleado='$IDempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: recervaciones.php");
    }
?>