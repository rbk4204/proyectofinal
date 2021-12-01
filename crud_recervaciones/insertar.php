<?php
include("conexion.php");
$con=conectar();

$IDempleado=$_POST['IDempleado'];
$IDcliente=$_POST['IDcliente'];
$IDhabitaciones=$_POST['Idhabitaciones'];
$diaLlegada=$_POST['diaLlegada'];
$diaSalida=$_POST['diaSalida'];
$tipohabitacion=$_POST['tipohabitacion'];
$tiporembolso=$_POST['tiporembolso'];


$sql="INSERT INTO reservaciones VALUES('$IDempleado','$IDcliente','$Idhabitaciones','$diaLlegada','$diaSalida','$tipohabitacion','$tiporembolso')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: recervaciones.php");
    
}else {
}
?>