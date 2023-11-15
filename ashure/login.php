<?php

   session_start();
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
       $correo = $_POST['correo'];
       $contrasena = $_POST['contrasena'];
       $contrasenaEncriptada = hash('sha256', $contrasena);
       $conexion = new mysqli("localhost", "root", "123456789", "ashuredb");
       if ($conexion->connect_error) {
           die("Error de conexión: " . $conexion->connect_error);
       }
       $consulta = "SELECT idUsuario FROM usuario WHERE correo = '$correo' AND contraseña = '$contrasenaEncriptada'";
       $resultado = $conexion->query($consulta);
       if ($resultado->num_rows == 1) {
           $_SESSION["loggedin"] = true;
           header("Location: index.php");
           exit();
       } else {
           $error = "Correo o contraseña incorrectos, vuelva a intentarlo.";
       }
       $conexion->close();
   }

?>
<!doctype html>
<html>
   <head>
      <title>Ashure - Iniciar sesión</title>
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
      <div class="container">
         <h2>Iniciar sesión</h2>
         <?php if (isset($error)) { ?>
         <p class="error-message"><?php echo $error; ?></p>
         <?php } ?>
         <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
               <label for="correo">Correo electrónico:</label>
               <input type="text" id="correo" name="correo" required>
            </div>
            <div class="form-group">
               <label for="contrasena">Contraseña:</label>
               <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <div class="form-group">
               <input type="submit" name="login" value="Iniciar sesión">
               <input type="reset" value="Limpiar" class="btn-reset">
            </div>
            <center><p>&copy;Ashure2023 todos los derechos reservados.</p></center>
         </form>
      </div>
   </body>
</html>