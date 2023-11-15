<?php
   session_start();
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
       $nombre = $_POST['nombre'];
       $a_paterno = $_POST['apaterno'];
       $a_materno = $_POST['amaterno'];
       $correoRegistro = $_POST['correoRegistro'];
       $contrasenaRegistro = $_POST['contrasenaRegistro'];
       $conexion = new mysqli("localhost", "root", "123456789", "ashuredb");
   
       if ($conexion->connect_error) {
           die("Error de conexión:" . $conexion->connect_error);
       }
       $consulta = "SELECT idUsuario FROM usuario WHERE correo = '$correoRegistro'";
       $resultado = $conexion->query($consulta);
       if ($resultado->num_rows > 0) {
           $errorRegistro = "El correo ya está registrado";
       } else {
           $contrasenaEncriptada = hash('sha256', $contrasenaRegistro);
           $consultaRegistro = "INSERT INTO usuario (idUsuario,nombre, apellido_paterno, apellido_materno, correo, contraseña) VALUES ('0','$nombre','$a_paterno', '$a_materno', '$correoRegistro', '$contrasenaEncriptada')";
   
           if ($conexion->query($consultaRegistro) === TRUE) {
               header("Location: login.php");
               exit();
           } else {
               $errorRegistro = "Error al registrar el correo";
           }
       }
       $conexion->close();
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Ashure - Registrarte</title>
      <link rel="icon" href="ashure.ico">
      <style>
         body {
         background-color: #f2f2f2;
         font-family: Arial, sans-serif;
         display: flex;
         align-items: center;
         justify-content: center;
         height: 100vh;
         margin: 0;
         }
         .container {
         width: 400px;
         margin: 0 auto;
         padding: 30px;
         background-color: #ffffff;
         border-radius: 30px;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
         }
         h2 {
         text-align: center;
         margin-bottom: 40px;
         color: #333333;
         }
         .form-group {
         margin-bottom: 20px;
         }
         .form-group label {
         display: block;
         margin-bottom: 7px;
         color: #286090;
         }
         .form-group input[type="text"],
         .form-group input[type="email"],
         .form-group input[type="password"] {
         width: 100%;
         padding: 7px;
         border: 1px solid #cccccc;
         border-radius: 7px;
         background-color: #cccccc;
         }
         .form-group input[type="submit"] {
         width: 100%;
         padding: 15px;
         background-color: #337ab7;
         color: #ffffff;
         border: none;
         border-radius: 30px;
         cursor: pointer;
         }
         .form-group input[type="submit"]:hover {
         background-color: #286090;
         }
         .form-group input[type="reset"] {
         width: 100%;
         padding: 13px;
         background-color: #cccccc;
         color: #ffffff;
         border: none;
         border-radius: 30px;
         cursor: pointer;
         }
         .form-group input[type="reset"]:hover {
         background-color: #999999;
         }
         .error-message {
         color: red;
         margin-top: 5px;
         }
      </style>
   </head>
   <body>
      <div class="container register">
         <h2>Registrarte</h2>
         <h4>¿Eres administrativo?</h4>
         <h4>Realiza los registros ahora.</h4>
         <?php if (isset($errorRegistro)) { ?>
         <p class="error-message"><?php echo $errorRegistro; ?></p>
         <?php } ?>
         <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
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
               <input type="email" id="correoRegistro" name="correoRegistro" required>
            </div>
            <div class="form-group">
               <label for="contrasenaRegistro">Contraseña:</label>
               <input type="password" id="contrasenaRegistro" name="contrasenaRegistro" required>
            </div>
            <div class="form-group">
               <input type="submit" name="register" value="Registrarse">
               <input type="reset" value="Limpiar" class="btn-reset">
            </div>
            <center>
               <div class="login-link">
                  <p>¿Ya tienes un usuario? <a href="login.php">Inicia sesión.</a></p>
               </div>
               <p>&copy;Ashure2023 todos los derechos reservados.</p>
            </center>
         </form>
      </div>
   </body>
</html>

