<?php 
   $servidor = "localhost";
   $usuario = "root";
   $clave = "123456789";
   $dbname="prueba";

   $conexion = mysqli_connect($servidor,$usuario,$clave,$dbname);
   if ($conexion->connect_error) {
      die("Error de conexión: " . $conexion->connect_error);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name= "prueba"action="#" method="post">
    <div class="form-group">
               <label for="nombre">Nombre</label>
               <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
               <label for="apaterno">Apellido paterno</label>
               <input type="text" id="apaterno" name="apaterno" required>
            </div>
            <div class="form-group">
               <label for="amaterno">Apellido materno</label>
               <input type="text" id="amaterno" name="amaterno" required>
            </div>
            <div class="form-group">
               <label for="correoRegistro">Correo electrónico:</label>
               <input type="text" id="correoRegistro" name="correoRegistro" required>
            </div>
            <div class="form-group">
               <label for="contrasenaRegistro">Contraseña:</label>
               <input type="password" id="contrasenaRegistro" name="contrasenaRegistro" required>
            </div>
            <div class="form-group">
               <input type="submit" name="register" value="Registrarse">
               <input type="reset" value="Limpiar" class="btn-reset">
            </div>
    </form>
</body>
</html>

<?php

if(isset($_POST['register'])){
    $nombre = $_POST['nombre'];
    $a_paterno = $_POST['apaterno'];
    $a_materno = $_POST['amaterno'];
    $correoRegistro = $_POST['correoRegistro'];
    $contrasenaRegistro = $_POST['contrasenaRegistro'];

    $insertar = "INSERT INTO usuario (idUsuario, nombre,apellido_paterno, apellido_materno,correo,contraseña)VALUES('0','$nombre','$a_paterno', '$a_materno', '$correoRegistro', '$contrasenaRegistro')";
    $ejec= mysqli_query($conexion,$insertar);

   

}
?>