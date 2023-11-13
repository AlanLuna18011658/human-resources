<?php 
/*php */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REmpleado</title>
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
            background: url(images/fondo1.jpg) no-repeat;
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   
<form action="#">
<h1 id="uno"> Registro empleado</h1>
    <section>
        
        <div class="contenedor">
            <div class="formulario"> 
               <!-- <h2>Registro</h2>-->
                <div class="input-contenedor">
                    <input type="text" required>
                    <label for="#"> Nombre/s</label>
                </div>
                <div class="input-contenedor">
                    <input type="text" required>
                    <label for="#"> Apellido paterno</label>
                </div>  
                <div class="input-contenedor">
                    <input type="text" required>
                    <label for="#"> Apellido materno</label>
                </div>  
                <div class="input-contenedor">
                    <input type="text" required>
                    <label for="#"> Teléfono</label>
                </div>  
                <div class="input-contenedor">
                    <input type="text" required>
                    <label for="#"> Genero</label>
                </div>  
                <div class="input-contenedor">
                    <input type="text" required>
                    <label for="#"> Calle</label>
                </div>  
                <div class="input-contenedor">
                    <input type="text" required>
                    <label for="#"> Ciudad</label>
                </div>  
            </div>
        
           
            <div class="contenedor2">
                <div class="formulario"> 
               <!-- <h2 id="h22">Empleado</h2>-->
                    <div class="input-contenedor">
                        <input type="text" required>
                        <label for="#"> Estado</label>
                    </div>
                    <div class="input-contenedor">
                        <input type="text" required>
                        <label for="#"> CP.</label>
                    </div>
                    <div class="input-contenedor">
                        <input type="email" required>
                        <label for="#"> Correo</label>
                    </div>
                    <div class="input-contenedor">
                        <input type="text" required>
                        <label for="#"> Fecha de contratación</label>
                    </div>
                    <div class="input-contenedor">
                        <input type="text" required>
                        <label for="#"> Cargo</label>
                    </div>
                    <div class="input-contenedor">
                        <input type="text" required>
                        <label for="#"> Salario</label>
                    </div>
                    <div class="input-contenedor">
                        <input type="text" required>
                        <label for="#"> Activo</label>
                    </div>
        
                    <div>
                        <button>Enviar</button>
                    </div> 
            </div>
        </div>  
      
        </div> 
        
      
        
    </section>
    
</form>

</body>
</html>