<?php
   require_once "validar_sesion.php";
?>
<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ashure - Ajustes</title>
      <link rel="icon" href="ashure.ico">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <style>
         body {
         background-color: #ffffff;
         color: #000000;
         }
         body.dark-mode {
         background-color: #1a1a1a;
         color: #ffffff;
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
      <div class="container mt-5">
         <center>
            <div class="form-check form-switch mt-3">
               <input class="form-check-input" type="checkbox" id="darkModeSwitch">
               <label class="form-check-label" for="darkModeSwitch"></label>
            </div>
            <h3>Ajustes</h3>
            <form class="mt-4">
               <div class="mb-3">
                  <label for="currentPassword" class="form-label">#</label>
                  <input type="password" class="form-control" id="currentPassword">
               </div>
               <div class="mb-3">
                  <label for="newPassword" class="form-label">#</label>
                  <input type="password" class="form-control" id="newPassword">
               </div>
               <div class="mb-3">
                  <label for="confirmPassword" class="form-label">#</label>
                  <input type="password" class="form-control" id="confirmPassword">
               </div>
               <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
         </center>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      <script>
         const darkModeSwitch = document.getElementById('darkModeSwitch');
         darkModeSwitch.addEventListener('change', () => {
             document.body.classList.toggle('dark-mode');
         });
      </script>
   </body>
</html>