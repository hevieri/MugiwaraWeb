<?php 
// Conexion base de datos
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "mugiwara"; 

// Creamos a la conexión utilizando MySQLi
$conexion = new mysqli($servername, $username, $password, $database);

// Verificamos la conexión
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

// Recibimos los datos del formulario contacto.php
$nombre  = $_POST["nombre"];
$email   = $_POST["email"];
$mensaje = $_POST["mensaje"];

// Armamos la instrucción SQL para insertar los datos en la tabla contacto_mugiwara
$sql = "INSERT INTO contacto_mugiwara (nombre, email, mensaje) VALUES ('$nombre','$email','$mensaje')";

// Ejecutamos la instrucción SQL sobre la conexión a la base de datos
if ($conexion->query($sql) === true) {
    echo "Los datos se guardaron correctamente";
    ?>
    <br><br>
    <a href="index.php" class="btn-1">Volver al Inicio</a> <!-- Botón para volver al index.php -->
    <?php
} else {
    echo "Upss, dio un error!";
}

// Cerramos la conexión a la base de datos
$conexion->close();
?>
