<?php
   include "conexion.php";

$where="";
if (isset($_POST['xnombre'])) {
   $nombre = $_POST['xnombre'];
} else {
   $nombre = ""; // O un valor predeterminado
}
if (isset($_POST['xdepartamento'])) {
   $departamento = $_POST['xdepartamento'];
} else {
   $departamento = ""; // O un valor predeterminado
}
if (isset($_POST['buscar'])){
   if(empty($_POST['xdepartamento'])){
      $where="where nombre like '".$nombre."%'";
   }
   else if(empty($_POST['xnombre'])){
      $where="where departamento='".$departamento."'";
   }
else{
   $where="where nombre like '".$nombre."%' and departamento='".$departamento."'";
}
}

////////////// CONSULTA DE A LA BASE DE DATOS ////////   
// $where
$empleado = "SELECT * FROM empleado  $where";

 
$resempleado = $conn->query($empleado);
$departamento= $conn->query($empleado);

$mensaje = ""; 

if(mysqli_num_rows($resempleado) == 0) {
    $mensaje = "<h1>No hay registros que coincidan con la búsqueda.</h1>";
}
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ashure - Mostrar_empleados</title>
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
      <section>
         <form method="post" action="">
            <input type="text" placeholder="Nombre..." name="xnombre"/>
            <select name="xdepartamento" id="">
               <option value=""> Departamento</option>
               <?php while ($resdepartamento = $departamento->fetch_array(MYSQLI_BOTH) ){
                  echo '<option value="'.$resdepartamento['departamento'].'">'.$resdepartamento['departamento'].'</option>';
               }
                  ?>
            </select>
            <button name="buscar" type="submit"> Buscar</button>
            <button name="limpiar" type="submit" href="prueba.php" > limpiar</button>
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

                   echo'   <tr>
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
                           <td>
                           <button type="button" class="btn btn-outline-success">Actualizar</button> | 
                           <button type="button" class="btn btn-outline-danger">Eliminar</button>
                           </td>
                       ';
               }
               ?>
         </table>
      <?php 
       echo $mensaje;
       ?>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   </body>
</html>