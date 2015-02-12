<?php
//Datos para conexión//
/*Para realizar cualquier consulta primero debo escreibir
este codigo y luego, en otro archivo aparte solo debo
poner include 'nombredelarchivo' y ya*/
$host="localhost";
$user="root";
$password="";
$db="basededatos";
//Creo una variable conexión//
$con=mysqli_connect($host,$user,$password)or die("problemas al conectar");
//Selecciono la base de datos//
mysqli_select_db($con,$db)or die("probelmas al seleccionar la base de datos");
?>