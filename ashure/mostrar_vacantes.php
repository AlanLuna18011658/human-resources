<?php
   include "conexion.php";

   ///////////// VARIABLES DE CONSULTA ///////////////
$where="";
// $nombre= $_POST['xnombre'];   
// $departamento= $_POST['xdepartamento'];   

if (isset($_POST['xnombre'])) {
   $nombre = $_POST['xnombre'];
} else {
   $nombre = ""; // O un valor predeterminado
}

if (isset($_POST['xvacantes'])) {
   $vacantes = $_POST['xvacantes'];
} else {
   $vacantes = ""; // O un valor predeterminado
}

/////////////// BOTON BUSCAR /////////////////////////
if (isset($_POST['buscar'])){
   if(empty($_POST['xvacantes'])){
      $where="where nombre like '".$nombre."%'";
   }
   else if(empty($_POST['xnombre'])){
      $where="where vacante='".$vacantes."'";
   }
else{
   $where="where nombre like '".$nombre."%' and vacante='".$vacantes."'";
}
}

////////////// CONSULTA DE A LA BASE DE DATOS ////////   
// $where
$empleado = "SELECT *
FROM empleado e
INNER JOIN vacantes v ON e.idempleado = v.empleado_idempleado $where";
 
$resempleado = $conn->query($empleado);
$vacantes= $conn->query($empleado);

$mensaje = ""; // Inicializa la variable $mensaje con un valor predeterminado

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
          *{
         font-family: 'Poppins', sans-serif;
         margin:0;
         padding:0;
         }
         body{
            background-color: #330033;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400' viewBox='0 0 800 800'%3E%3Cg fill='none' stroke='%23404' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3Cg fill='%23505'%3E%3Ccircle cx='769' cy='229' r='5'/%3E%3Ccircle cx='539' cy='269' r='5'/%3E%3Ccircle cx='603' cy='493' r='5'/%3E%3Ccircle cx='731' cy='737' r='5'/%3E%3Ccircle cx='520' cy='660' r='5'/%3E%3Ccircle cx='309' cy='538' r='5'/%3E%3Ccircle cx='295' cy='764' r='5'/%3E%3Ccircle cx='40' cy='599' r='5'/%3E%3Ccircle cx='102' cy='382' r='5'/%3E%3Ccircle cx='127' cy='80' r='5'/%3E%3Ccircle cx='370' cy='105' r='5'/%3E%3Ccircle cx='578' cy='42' r='5'/%3E%3Ccircle cx='237' cy='261' r='5'/%3E%3Ccircle cx='390' cy='382' r='5'/%3E%3C/g%3E%3C/svg%3E");
         }
         .tabla-container {
  font-family: Arial, sans-serif;
}

.tabla-container table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #ddd;
 
}

.tabla-container th,
.tabla-container td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;

  
}

.tabla-container thead {
  background-color: #f2f2f2;
}

.tabla-container tbody tr:nth-child(even) {
  background-color: #fff;
}
.mostrar{
   color: #fff;
   backdrop-filter: blur(4px);
   
}
tr:hover {
   background-color: #330055;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 1000'%3E%3Cg %3E%3Ccircle fill='%23330055' cx='50' cy='0' r='50'/%3E%3Cg fill='%233a015d' %3E%3Ccircle cx='0' cy='50' r='50'/%3E%3Ccircle cx='100' cy='50' r='50'/%3E%3C/g%3E%3Ccircle fill='%23410165' cx='50' cy='100' r='50'/%3E%3Cg fill='%2348026e' %3E%3Ccircle cx='0' cy='150' r='50'/%3E%3Ccircle cx='100' cy='150' r='50'/%3E%3C/g%3E%3Ccircle fill='%23500376' cx='50' cy='200' r='50'/%3E%3Cg fill='%2357047e' %3E%3Ccircle cx='0' cy='250' r='50'/%3E%3Ccircle cx='100' cy='250' r='50'/%3E%3C/g%3E%3Ccircle fill='%235f0587' cx='50' cy='300' r='50'/%3E%3Cg fill='%2367068f' %3E%3Ccircle cx='0' cy='350' r='50'/%3E%3Ccircle cx='100' cy='350' r='50'/%3E%3C/g%3E%3Ccircle fill='%236f0798' cx='50' cy='400' r='50'/%3E%3Cg fill='%237707a0' %3E%3Ccircle cx='0' cy='450' r='50'/%3E%3Ccircle cx='100' cy='450' r='50'/%3E%3C/g%3E%3Ccircle fill='%238008a9' cx='50' cy='500' r='50'/%3E%3Cg fill='%238909b1' %3E%3Ccircle cx='0' cy='550' r='50'/%3E%3Ccircle cx='100' cy='550' r='50'/%3E%3C/g%3E%3Ccircle fill='%239109ba' cx='50' cy='600' r='50'/%3E%3Cg fill='%239a09c3' %3E%3Ccircle cx='0' cy='650' r='50'/%3E%3Ccircle cx='100' cy='650' r='50'/%3E%3C/g%3E%3Ccircle fill='%23a309cb' cx='50' cy='700' r='50'/%3E%3Cg fill='%23ad09d4' %3E%3Ccircle cx='0' cy='750' r='50'/%3E%3Ccircle cx='100' cy='750' r='50'/%3E%3C/g%3E%3Ccircle fill='%23b608dc' cx='50' cy='800' r='50'/%3E%3Cg fill='%23c007e5' %3E%3Ccircle cx='0' cy='850' r='50'/%3E%3Ccircle cx='100' cy='850' r='50'/%3E%3C/g%3E%3Ccircle fill='%23c905ee' cx='50' cy='900' r='50'/%3E%3Cg fill='%23d303f6' %3E%3Ccircle cx='0' cy='950' r='50'/%3E%3Ccircle cx='100' cy='950' r='50'/%3E%3C/g%3E%3Ccircle fill='%23D0F' cx='50' cy='1000' r='50'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: contain;
}
.tr-mostrar{
  
}

.botones-buscar{
   height: 100px;

}
.select-contenedor select{

         background-color: transparent;
         border: none;
         outline: none;
         font-size: 1rem;
         color: #fff;  
         
}

.select-contenedor option{
            color:black;
         }
h1{
   color: #fff;
   text-align: center;
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
      <div class="botones-buscar">
         <form method="post" action="">
         <div class="select-contenedor">
            <h1>Consulta Vacantes</h1>
            <input type="text" placeholder="Nombre..." name="xnombre"/>
            <select name="xvacantes" id="">
               <option value=""> vacantes...</option>
               <?php while ($resvacantes = $vacantes->fetch_array(MYSQLI_BOTH) ){
                  
                  echo '<option value="'.$resvacantes['vacante'].'">'.$resvacantes['vacante'].'</option>';
               }
                  ?>
            </select>
            <button name="buscar" type="submit" class="btn btn-primary"> Buscar</button>
            <button name="limpiar" type="submit" href="prueba.php"  class="btn btn-primary"> limpiar</button>
            </div>
         </form>
         </div>
         <div class="tabla-container">
         <table>
            <tr>
               <thead>
                  <td>ID</td>
                  <td>Nombre</td>
                  <td>Apellido paterno</td>
                  <td>Apellido materno</td>
                  <td>Vavante</td>
                  <td>Departamento</td>
                  <td>Fecha de cambio</td>
                
               </thead>

         
            </tr>
            <?php 
               while ($mostrar = $resempleado->fetch_array(MYSQLI_BOTH) ){

                   echo' 
                     <tbody>
                        <tr class="tr-mostrar">
                           <td class="mostrar">'.$mostrar['idempleado'].'</td>
                           <td class="mostrar">'.$mostrar['nombre'].'</td>
                           <td class="mostrar">'.$mostrar['apellido_paterno'].'</td>
                           <td class="mostrar">'.$mostrar['apellido_materno'].'</td>
                           <td class="mostrar">'.$mostrar['vacante'].'</td>
                           <td class="mostrar">'.$mostrar['departamento'].'</td>
                           <td class="mostrar">'.$mostrar['fecha_cambio'].'</td>
                           </tr>
                        </tbody>
                       ';

               }
               ?>
         </table>
         </div>
      <?php 
       echo $mensaje;
       ?>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   
   </body>
</html>