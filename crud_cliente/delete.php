<?php

include("conexion.php");
$con=conectar();

$IDcliente=$_GET['IDcliente'];

$sql="DELETE FROM cliente  WHERE IDcliente='$IDcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
