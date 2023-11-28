<?php
   require_once "validar_sesion.php";
   include "conexion.php";
   $empleado = "SELECT * FROM empleado";
   $resempleado = $conn->query($empleado);
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ashure - Consulta</title>
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
      <?php
      if(!isset($_POST['buscar'])){$_POST['buscar'] = '';}
      if(!isset($_POST['buscar'])){$_POST['buscar'] = '';}
      if(!isset($_POST['buscar'])){$_POST['buscar'] = '';}
      if(!isset($_POST['buscar'])){$_POST['buscar'] = '';}
      if(!isset($_POST['buscar'])){$_POST['buscar'] = '';}
      if(!isset($_POST['buscar'])){$_POST['buscar'] = '';}
      if(!isset($_POST['buscar'])){$_POST['buscar'] = '';}
      if(!isset($_POST['buscar'])){$_POST['buscar'] = '';}
      ?>
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
                                             <option value="Desarrollo">Desarrollo</option>
                                             <option value="RH">RH</option>
                                             <option value="Mantenimiento">Mantenimiento</option>
                                             <option value="Sistemas">Sistemas</option>
                                             <option value="Compras">Compras</option>
                                             <option value="Ventas">Ventas</option>
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
                                             <option value="<?php echo $_POST['cargo'];?>"> <?php echo $_POST['cargo'];?></option>
                                             <?php } ?>
                                             <option value="">Todos</option>
                                             <option value="Ceo">Ceo</option>
                                             <option value="Direccion">Direccion</option>
                                             <option value="Gerencia">Gerencia</option>
                                          </select>
                                       </th>
                                    </tr>
                                 </thead>
                              </table>
                           </div>
                           <h4 class="card-title">Ordenar por</h4>
                           <div class="col-11">
                              <table class="table">
                                 <thead>
                                    <tr class="filters">
                                       <th>
                                          Selecciona el orden
                                          <select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;">
                                             <?php if ($_POST["orden"] != ''){ ?>
                                             <optiom value="<?php echo $_POST["orden"]; ?>">
                                             <?php
                                                if ($_POST["orden"] == '1'){echo 'Ordenar por nombre';}
                                                if ($_POST["orden"] == '2'){echo 'Ordenar por departamento';}
                                                if ($_POST["orden"] == '3'){echo 'Ordenar por cargo';}
                                                if ($_POST["orden"] == '4'){echo 'Ordenar por precio de menor a mayor';}
                                                if ($_POST["orden"] == '5'){echo 'Ordenar por precio de mayor a menor';}
                                                if ($_POST["orden"] == '6'){echo 'Ordenar por fecha reciente';}
                                                if ($_POST["orden"] == '7'){echo 'Ordenar por fecha antigua';}
                                                ?>
                                             </option>
                                             <?php } ?>
                                             <option value=""></option>
                                             <option value="1">Ordenar por nombre</option>
                                             <option value="2">Ordenar por departamento</option>
                                             <option value="3">Ordenar por cargo</option>
                                             <option value="4">Ordenar por precio de menor a mayor</option>
                                             <option value="5">Ordenar por precio de mayor a menor</option>
                                             <option value="6">Ordenar por fecha reciente</option>
                                             <option value="7">Ordenar por fecha antigua</option>
                                          </select>
                                       </th>
                                    </tr>
                                 </thead>
                              </table>
                           </div>
                           <div class="col-1">
                              <input type="submit" class="btn" value="ver" style="margin-top: 38px; background-color: purple; color: white;">
                           </div>
                     </div>
                     <?php
                        /*Filtro de busqueda///////////////////////////*/
                        if ($_POST['buscar']==''){$_POST['buscar']='';}
                        $aKeyword = explode("", $_POST['buscar']);

                        if ($_POST["buscar"] == '' AND $_POST['titulo'] == '' AND $_POST['tiulo'] == '' AND $_POST['titulo'] == '' AND $_POST['titulo'] == '' AND $_POST['titulo'] == ''){
                            $query = "SELECT * FROM empleado";
                        }else{
                            $query = "SELECT * FROM empleado";

                            if ($_POST['buscar']!=''){
                              $query .= "WHERE (nombre LIKE LOWER('%".$aKeyword[0]."%') OR apellidos LIKE LOWER('%".$aKeyword[0]."%'))";

                              for($i = 1; $i < count($aKeyword); $i++){
                                 if(!empty($aKeyword[$i])){
                                    $query .= "OR nombre LIKE '%" .$aKeyword[$i] . "%' OR apellidos LIKE '%" . $aKeyword[$i] . "%'";
                                 }
                              }
                            }
                        }
                        ?>
                     <p style="font-weight: bold; color:purple;"><i class="mdi mdi-file-document"></i>Resultados encontrados</p>
                     </form>
                     <div class="table-responsive">
                        <table class="table">
                        <thead>
                           <tr style="background-color:purple; color:#ffffff;">
                              <th style="text-align: center;">Nombre</th>
                              <th style="text-align: center;">Departamento</th>
                              <th style="text-align: center;">Cargo</th>
                              <th style="text-align: center;">Sueldo</th>
                              <th style="text-align: center;">Fecha</th>
                           </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td style="text-align: center;"><?php echo $rowSql["Titulo"]; ?></td>
                              <td style="text-align: center;"><?php echo $rowSql["Titulo"]; ?></td>
                              <td style="text-align: center;"><?php echo $rowSql["Titulo"]; ?></td>
                              <td style="text-align: center;"><?php echo $rowSql["Titulo"]; ?></td>
                              <td style="text-align: center;"><?php echo $rowSql["Titulo"]; ?></td>
                            </tr>
                        </tbody>        
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>