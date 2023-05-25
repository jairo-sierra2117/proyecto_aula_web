<?php
$servername = "localhost:3307"; // Dirección del servidor de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "loginparcipagijac"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

/*Verificar la conexión
if ($conn->connect_error) {
  die("Error al conectar a la base de datos: " . $conn->connect_error);
} else {
  echo "Conexión exitosa a la base de datos.";
}*/
?>
