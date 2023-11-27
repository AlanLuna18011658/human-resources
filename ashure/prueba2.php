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
<div class="container mt-5">
    <div class="col-12">

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Buscar</h4>
                        <form action="" method="POST">
                            <div class="mb-3">
                               <label class="form-label">Nombre a buscar</label>
                               <input type="text" class ="input-class" id="buscar" value="<?php echo $_POST["buscar"] ?>"> 
                            </div>
                            <h4 class="card-title"> filtro de búsqueda</h4>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>
                                                Departamento
                                                <select id="departamento" name="buscardepartamento" class="" style=" border: #bababa 1px; color:#000000;">
                                                    <?php if ($_POST["buscardepartamento"] != ''){ ?>
                                                    <option value=" <?php echo $_POST["buscardepartamento"];?>"><?php echo $_POST["buscardepartamento"];?> </option>
                                                    <?php } ?>
                                                    <option value="">Todos</option>
                                                    <option value="Desarrollo"></option>
                                                    <option value="RH"></option>
                                                    <option value="Mantenimiento"></option>
                                                    <option value="Prducción"></option>    
                                                    <option value="Sistemas"></option>
                                                    <option value="Compras"></option>
                                                    <option value="Ventas"></option>
                                                    
                                                </select>
                                            </th>
                                            <th>
                                                Sueldo desde:
                                                <input type="number" id="sueldo_desde" name="sueldo_desde" class="" value="<?php echo $_POST["sueldo_desde"];?>">
                                            </th>
                                            <th>
                                                Sueldo hasta:
                                                <input type="number" id="sueldo_hasta" name="sueldo_hasta" class="" value="<?php echo $_POST["sueldo_hasta"];?>">
                                            </th>
                                            <th>
                                                Fecha desde:
                                                <input type="number" id="fecha_desde" name="fecha_desde" class="" value="<?php echo $_POST["sueldo_hasta"];?>">
                                            </th>
                                            <th>
                                                Fecha hasta:
                                                <input type="number" id="fecha_hasta" name="fecha_hasta" class="" value="<?php echo $_POST["sueldo_hasta"];?>">
                                            </th>
                                            <th>
                                                Cargo
                                                <select id="cargo" name="cargo" class="" style=" border: #bababa 1px; color:#000000;">
                                                    <?php if ($_POST["cargo"] != ''){ ?>
                                                    <option value=" <?php echo $_POST["cargo"];?>"><?php echo $_POST["cargo"];?> </option>
                                                    <?php } ?>
                                                    <option value="">Todos</option>
                                                    <option value="Ceo"></option>
                                                    <option value="Direccion"></option>
                                                    <option value="Gerencia"></option>
                                                </select>
                                            </th>
                                           
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                                <h4 class="card-title">Ordenar por</h4>                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
</body>
</html>