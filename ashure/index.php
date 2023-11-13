<?php
/*
require_once "validar_sesion.php";
*/
?>
<!doctype html>
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
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Nomina</a></li>
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
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Nomina</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" aria-disabled="true">Ajustes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo htmlspecialchars('destroy.php', ENT_QUOTES, 'UTF-8'); ?>" aria-disabled="true">Cerrar sesión</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Busqueda</button>
      </form>
    </div>
  </div>
</nav>
    <!-- Contenido Ashure -->
  <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="font.jpeg" class="d-block w-100" alt="font">
    </div>
    <div class="carousel-item">
      <img src="font-second.jpeg" class="d-block w-100" alt="font-second">
    </div>
    <div class="carousel-item">
      <img src="font-three.jpeg" class="d-block w-100" alt="font-three">
    </div>
    <div class="carousel-item">
      <img src="ashure_web.jpg" class="d-block w-100" alt="ashure_web">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
  </body>
</html>