<?php
   require_once "validar_sesion.php";
   include 'conexion.php';
   if ($_SERVER["REQUEST_METHOD"] == "POST") { 
       $nombre_contacto = $conn->real_escape_string($_POST["nombre_contacto"]);
       $relacion_contacto = $conn->real_escape_string($_POST["relacion_contacto"]);
       $telefono_contacto = $conn->real_escape_string($_POST["telefono_contacto"]);
       $correo_contacto = $conn->real_escape_string($_POST["correo_contacto"]);
       $id_foranea = $conn->real_escape_string($_POST["id_foranea"]);
       $sql = "INSERT INTO contacto_emergencia (idcontacto_emergencia, nombre_contacto, relacion_contacto, telefono_contacto, correo_contacto, empleado_idempleado) 
               VALUES ('0','$nombre_contacto', ' $relacion_contacto', '$telefono_contacto', '$correo_contacto', '$id_foranea')";
       if ($conn->query($sql) === TRUE) {
           echo "Ashure - ¡Registro insertado correctamente!";
       } else {
           echo "Error al insertar el registro, intentelo nuevamente." . $conn->error;
       }
   }?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ashure - Contacto de emergencia</title>
      <link rel="icon" href="ashure.ico">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <style>
         /* css */
         @import url();
         *{
         font-family: 'Poppins', sans-serif;
         margin:0;
         padding:0;
         }
         body{
         background: url(fondogalaxia.jpg) no-repeat;
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
         width: 500px;
         border: 2px solid rgba(255,255,255, .6);
         border-radius: 20px;
         backdrop-filter: blur(15px);
         height: 750px;
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
         left: 5px ;
         transform: translateY(-50%);
         color: #fff;
         font-size: 1rem;
         pointer-events: none;
         transition: .6s;
         font-weight: bold;
         }
         input:focus ~ label,
         input:valid ~ label{
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
            <img src="ashure.webp" alt="logo" width="200px" height="150px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                     Registro
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="turno_horario.php">Turno y horario</a></li>
                        <li><a class="dropdown-item" href="vacantes.php">Vacantes</a></li>
                        <li><a class="dropdown-item" href="retiro.php">Retiro y jubilación</a></li>
                        <li><a class="dropdown-item" href="contacto_emergencia.php">Contacto de emergencia</a></li>
                        <li><a class="dropdown-item" href="nomina.php">Nomina</a></li>
                        <li><a class="dropdown-item" href="salud.php">Salud</a></li>
                        <li><a class="dropdown-item" href="permisos_vacaciones.php">Permisos de vacaciones</a></li>
                        <li><a class="dropdown-item" href="rotacion_personal.php">Rotacion de Personal</a></li>
                        <li>
                           <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="empleado.php">Registro Empleado</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                     Consulta
                     </a>
                     <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="mostrar_turnos_horarios.php">Turno y horario</a></li>
                        <li><a class="dropdown-item" href="mostrar_vacantes.php">Vacantes</a></li>
                        <li><a class="dropdown-item" href="mostrar_retiro.php">Retiro y jubilación</a></li>
                        <li><a class="dropdown-item" href="mostrar_contacto_emergencia.php">Contacto de emergencia</a></li>
                        <li><a class="dropdown-item" href="mostrar_nomina.php">Nomina</a></li>
                        <li><a class="dropdown-item" href="mostrar_salud.php">Salud</a></li>
                        <li><a class="dropdown-item" href="mostrar_permisos_vacaciones.php">Permisos y vacaciones</a></li>
                        <li><a class="dropdown-item" href="mostrar_rotacion_personal.php">Rotacion de Personal</a></li>
                        <li>
                           <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="mostrar_empleados.php">Empleado</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="settings.php" aria-disabled="true">Ayuda</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo htmlspecialchars('destroy.php', ENT_QUOTES, 'UTF-8'); ?>" aria-disabled="true">Cerrar sesión</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <form method="POST" action="">
         <h1 id="uno">Contacto de emergencia</h1>
         <section>
            <div class="contenedor">
               <div class="formulario">
                  <div class="input-contenedor">
                     <select type="text" name="id_foranea" required>
                        <option value="id_foranea" id="empleado">Elige un empleado...
                           <?php
                              $sql = $conn-> query("SELECT * FROM empleado");
                              while($fila=$sql->fetch_array()){
                                 echo"<option value='".$fila['idempleado']."'>".$fila['nombre']."</option>";
                              }
                              $conn->close();
                              ?>
                        </option>
                     </select>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="nombre_contacto" required>
                     <label for="nombre_contacto">Nombre de contacto</label>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="relacion_contacto" required>
                     <label for="relacion_contacto">Relacion de contacto</label>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="telefono_contacto" required>
                     <label for="telefono_contacto">Telefono de contacto</label>
                  </div>
                  <div class="input-contenedor">
                     <input type="text" name="correo_contacto" required>
                     <label for="correo_contacto">Correo de contacto</label>
                  </div>
                  <div>
                     <button type="submit">Enviar</button>
                  </div>
               </div>
            </div>
         </section>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   </body>
</html>