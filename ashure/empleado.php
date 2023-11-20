<?php
   require_once "validar_sesion.php";
?>
<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "ashuredb";
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
       die("Conexión fallida:" . $conn->connect_error);
   }
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $nombre = $conn->real_escape_string($_POST["nombre"]);
       $apellido_paterno = $conn->real_escape_string($_POST["apellido_paterno"]);
       $apellido_materno = $conn->real_escape_string($_POST["apellido_materno"]);
       $telefono = $conn->real_escape_string($_POST["telefono"]);
       $genero = $conn->real_escape_string($_POST["genero"]);
       $calle = $conn->real_escape_string($_POST["calle"]);
       $ciudad = $conn->real_escape_string($_POST["ciudad"]);
       $estado = $conn->real_escape_string($_POST["estado"]);
       $cp = $conn->real_escape_string($_POST["cp"]);
       $correo = $conn->real_escape_string($_POST["correo"]);
       $fecha_contratacion = $conn->real_escape_string($_POST["fecha_contratacion"]);
       $cargo = $conn->real_escape_string($_POST["cargo"]);
       $salario = $conn->real_escape_string($_POST["salario"]);
       $activo = $conn->real_escape_string($_POST["activo"]);
       $sql = "INSERT INTO empleado (nombre, apellido_paterno, apellido_materno, telefono, genero, calle, ciudad, estado, cp, correo, fecha_contratacion, cargo, salario, activo) 
               VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$telefono', '$genero', '$calle', '$ciudad', '$estado', '$cp', '$correo', '$fecha_contratacion', '$cargo', '$salario', '$activo')";
       if ($conn->query($sql) === TRUE) {
           echo "Registro insertado correctamente...";
       } else {
           echo "Error al insertar el registro." . $conn->error;
       }
   }
   $conn->close();
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ashure - Registro Empleado</title>
      <link rel="icon" href="ashure.ico">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <style>
         @import url();
         *{
         font-family: 'Poppins', sans-serif;
         margin:0;
         padding:0;
         }
         body{
         background: url(font-three.jpeg) no-repeat;
         background-position: center;
         background-size: cover;
         }
         section{
         display: flex;
         justify-content: center;
         align-items: center;
         width: 100% ;
         min-height: 100vh;
         }
         .contenedor{
         position: relative;
         width: 700px;
         border: 2px solid rgba(255,255,255, .6);
         border-radius: 20px;
         backdrop-filter: blur(15px);
         height: 800px;
         display: flex;
         justify-content: center;
         align-items: center;
         }
         .contenedor2{
         position: relative;
         width: 400px;
         border-radius: 20px;
         backdrop-filter: blur(15px);
         height: 800px;
         display: flex;
         justify-content: center;
         align-items: center;
         }
         .contenedor h2{
         font-size: 2.3rem;
         color: #fff;
         text-align: right;
         }
         #h22{
         font-size: 2.3rem;
         color:;
         text-align: left;
         }
         #uno{
         position: relative;
         top: 10px;
         font-size: 2.3rem;
         color: #FFF;
         text-align: center;
         }
         .input-contenedor{
         position: relative;
         margin: 30px 0;
         width: 300px;
         border-bottom: 2px solid #fff ;
         }
         .input-contenedor label{
         position: absolute;
         top: 50%;
         left:5px ;
         transform: translateY(-50%);
         color: #fff;
         font-size: 1rem;
         pointer-events: none;
         transition: .6s;
         font-family: bold;
         }
         input:focus ~ label,
         input:focus ~ label{
         top: -5px;
         }
         .input-contenedor input{
         width: 100%;
         height: 50px;
         background-color: transparent;
         border: none;
         outline: none;
         font-size: 1rem;
         padding: - 35px 0 5px;
         color: #fff;
         }
         .input-contenedor i{
         position: absolute;
         color: #fff;
         font-size: 1.6rem;
         top: 19px
         right: 8px;
         }
         button{
         width: 100%;
         height: 45px;
         border-radius: 40px;
         background: #fff;
         border: none;
         font-weight: bold;
         cursor: pointer;
         outline: none;
         font-size: 1rem;
         transition: .4s; 
         }
      </style>
   </head>
   <body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
            <img src="ashure.webp" alt="logo" width="200px" height="150px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Perfil</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                     Empleados
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li>
                           <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="empleado.php">Registro Empleado</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                     Administrativos
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li>
                           <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Nomina</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="settings.php" aria-disabled="true">Ajustes</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo htmlspecialchars('destroy.php', ENT_QUOTES, 'UTF-8'); ?>" aria-disabled="true">Cerrar sesión</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <form method="POST" action="">
         <h1 id="uno"> Registro empleado</h1>
         <section>
            <div class="contenedor">
               <div class="formulario">
                  <div class="input-contenedor">
                     <input type="text" name="nombre" required>
                     <label for="nombre"> Nombre/s</label>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="apellido_paterno" required>
                     <label for="apellido_paterno"> Apellido paterno</label>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="apellido_materno" required>
                     <label for="apellido_materno"> Apellido materno</label>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="telefono" required>
                     <label for="telefono"> Teléfono</label>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="genero" required>
                     <label for="genero"> Genero</label>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="calle" required>
                     <label for="calle"> Calle</label>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="ciudad" required>
                     <label for="ciudad"> Ciudad</label>
                  </div>
               </div>
               <div class="contenedor2">
                  <div class="formulario">
                     <div class="input-contenedor">
                        <input type="text" name="estado" required>
                        <label for="estado"> Estado</label>
                     </div>
                     <div class="input-contenedor">
                        <input type="text" name="cp" required>
                        <label for="cp"> CP</label>
                     </div>
                     <div class="input-contenedor">
                        <input type="email" name="correo" required>
                        <label for="correo"> Correo</label>
                     </div>
                     <div class="input-contenedor">
                        <input type="text" name="fecha_contratacion" required>
                        <label for="fecha_contratacion"> Fecha de contratación</label>
                     </div>
                     <div class="input-contenedor">
                        <input type="text" name="cargo" required>
                        <label for="cargo"> Cargo</label>
                     </div>
                     <div class="input-contenedor">
                        <input type="text" name="salario" required>
                        <label for="salario"> Salario</label>
                     </div>
                     <div class="input-contenedor">
                        <input type="text" name="activo" required>
                        <label for="activo"> Activo</label>
                     </div>
                     <div>
                        <button type="submit">Enviar</button>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   </body>
</html>
