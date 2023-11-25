<?php 
   $servidor = "localhost";
   $usuario = "root";
   $clave = "123456789";
   $dbname="ashuredb";

   $conn = mysqli_connect($servidor,$usuario,$clave,$dbname);
   if ($conn->connect_error) {
      die("Error de conexión: " . $conn->connect_error);
  }


?>