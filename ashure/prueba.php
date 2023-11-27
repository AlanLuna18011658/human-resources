<?php
include "conexion.php";

$empleado = "SELECT * FROM empleado";
$resempleado = $conn->query($empleado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ashure - Inicio</title>
      <link rel="icon" href="ashure.ico">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      <style>
    
body
{

background: url();
}

header 
{	

	margin-top: 4%;
	margin-right: 2%;
	margin-left: 2%;
	text-align: center;

}

section 
{

	margin-right: 2%;
	margin-left: 2%;
}

.pad-basic

{
padding:.5%; 
	
}

.no-btm
{
	margin-bottom:0%;
}

.btn-der
{
	text-align: right;
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
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
                        <li><a class="dropdown-item" href="#">Modulo</a></li>
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
    <!-- mostrar datos -->
    <section>
        <form method="post" action="">
            <input type="text" placeholder="Nombre..." name="xnombre"/>

        </form>
        <table>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido paterno</td>
                <td>Apellido materno</td>
                <td>Teléfono</td>
                <td>Genero</td>
                <td>Calle</td>
                <td>Ciudad</td>
                <td>Estado</td>
                <td>CP</td>
                <td>Correo</td>
                <td>Fecha contratacion</td>
                <td>Cargo</td>
                <td>Departamento</td>
                <td>Salario</td>
                <td>Activo</td>
            </tr>
            <?php 
            while ($mostrar = $resempleado->fetch_array(MYSQLI_BOTH) ){
                echo'  <tr>
                        <td>'.$mostrar['idempleado'].'</td>
                        <td>'.$mostrar['nombre'].'</td>
                        <td>'.$mostrar['apellido_paterno'].'</td>
                        <td>'.$mostrar['apellido_materno'].'</td>
                        <td>'.$mostrar['telefono'].'</td>
                        <td>'.$mostrar['genero'].'</td>
                        <td>'.$mostrar['calle'].'</td>
                        <td>'.$mostrar['ciudad'].'</td>
                        <td>'.$mostrar['estado'].'</td>
                        <td>'.$mostrar['cp'].'</td>
                        <td>'.$mostrar['correo'].'</td>
                        <td>'.$mostrar['fecha_contratacion'].'</td>
                        <td>'.$mostrar['cargo'].'</td>
                        <td>'.$mostrar['departamento'].'</td>
                        <td>'.$mostrar['salario'].'</td>
                        <td>'.$mostrar['activo'].'</td>
                        </tr>
                    ';
            }
            ?>
        </table>
    </section>
</body>
</html>