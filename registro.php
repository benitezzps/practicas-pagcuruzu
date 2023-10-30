<?php
//Incluir la funcion
include_once("bds.php");

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email= $_POST["email"];
$telefono=$_POST["telefono"];

echo "Los datos son los siguientes";
echo "$nombre,$apellido,$email, $telefono";

$conectar=con();//llamamos a la funcion conectar

$sql="INSERT INTO pacientes (nombre,apellido,email,telefono)
VALUE ('$nombre', '$apellido','$email','$telefono')";

$result=mysqli_query($conectar, $sql) or trigger_error("error de conexion".mysqli_error($conectar));

?>