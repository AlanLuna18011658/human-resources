<?php 
   $servidor = "localhost";
   $usuario = "root";
   $clave = "";
   $dbname="prueba";

   $conexion = mysqli_connect($servidor,$usuario,$clave,$dbname);
   if ($conexion->connect_error) {
      die("Error de conexión: " . $conexion->connect_error);
  }
?>