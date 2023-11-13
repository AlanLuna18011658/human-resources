<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $correoRegistro = $_POST["correoRegistro"];
    $contrasenaRegistro = $_POST["contrasenaRegistro"];
    $nombre = $_POST["nombre"];
    $conexion = new mysqli("localhost", "root", "123456789", "ashure_dr");
    if ($conexion->connect_error) {
        die("Error de conexión:" . $conexion->connect_error);
    }
    $consulta = "SELECT id FROM usuario WHERE correo = '$correoRegistro'";
    $resultado = $conexion->query($consulta);
    if ($resultado->num_rows > 0) {
        $errorRegistro = "El correo ya está registrado";
    } else {
        $contrasenaEncriptada = hash('sha256', $contrasenaRegistro);
        $consultaRegistro = "INSERT INTO usuario (nombre, correo, contraseña) VALUES ('$nombre', '$correoRegistro', '$contrasenaEncriptada')";
        if ($conexion->query($consultaRegistro) === TRUE) {
            header("Location: login.php");
            exit();
        } else {
            $errorRegistro = "Error al registrar el correo";
        }
    }
    $conexion->close();
}
$conexion = new mysqli("localhost", "root", "123456789", "ashure_dr");
if ($conexion->connect_error) {
    die("Error de conexión:" . $conexion->connect_error);
}
$consultaAlter = "ALTER TABLE usuario MODIFY COLUMN contraseña VARCHAR(64) NOT NULL";
$conexion->query($consultaAlter);
$conexion->close();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="icon" href="ashure.ico">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #333333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 7px;
            color: #286090;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 7px;
            border: 1px solid #cccccc;
            border-radius: 7px;
            background-color: #cccccc;
        }
        .form-group input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #337ab7;
            color: #ffffff;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #286090;
        }
        .form-group input[type="reset"] {
            width: 100%;
            padding: 13px;
            background-color: #cccccc;
            color: #ffffff;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }
        .form-group input[type="reset"]:hover {
            background-color: #999999;
        }
        .error-message {
            color: red;
            margin-top: 5px;
        }
        .container.register {
            background-color: #f9f9f9;
            margin-top: 12px;
        }
        .container.register h2 {
            color: #333333;
        }
        .container.register .form-group input[type="text"],
        .container.register .form-group input[type="password"] {
            background-color: #cccccc;
        }
        .container.register .form-group input[type="submit"] {
            background-color: #4caf50;
        }
        .container.register .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container register">
        <h2>Registro</h2>
        <h4>Es rápido y fácil.</h4>
        <?php if (isset($errorRegistro)) { ?>
            <p class="error-message"><?php echo $errorRegistro; ?></p>
        <?php } ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="correoRegistro">Correo electrónico:</label>
                <input type="text" id="correoRegistro" name="correoRegistro" required>
            </div>
            <div class="form-group">
                <label for="contrasenaRegistro">Contraseña:</label>
                <input type="password" id="contrasenaRegistro" name="contrasenaRegistro" required>
            </div>
            <div class="form-group">
                <input type="submit" name="register" value="Registrarse">
                <input type="reset" value="Limpiar" class="btn-reset">
            </div>
        </form>
    </div>
</body>
</html>