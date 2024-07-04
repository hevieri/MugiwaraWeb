<?php
//Conexión a la base de datos
$servername = "localhost";
$username   = "root";      
$password   = "";         
$database   = "mugiwara";  

// Crear la conexión utilizando mysqli
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer el juego de caracteres a utf8 para la conexión
$conn->set_charset("utf8");
?>
