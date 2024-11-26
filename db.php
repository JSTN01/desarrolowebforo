<?php
$host = 'localhost';
$dbname = 'usuario';
$username = 'root';
$password = '';


$conexion = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (!$conexion) {
  die("Conexión Fallida: " . mysqli_connect_error());
}

?>