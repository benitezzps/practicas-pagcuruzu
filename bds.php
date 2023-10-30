<?php
//Paso 2 establecer la conexion a la base de datos
function con (){

$hostname="localhost";
$bdusuario="root";
$clave="";
$bdnombre="bdd_curuzu";

//Guardar la conexion en la base de datos
$conectar=mysqli_connect($hostname, $bdusuario, $clave, $bdnombre);
return $conectar;
}
?>