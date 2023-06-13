<?php
include 'conexion_be.php';
// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$evento = $_POST["evento"];
$comentario = $_POST["comentario"];
// Ejemplo: Mostrar los datos registrados
echo "Gracias por registrarte al evento:<br>";
echo "nombre: " . $nombre . "<br>";
echo "apellido: " . $apellido . "<br>";
echo "correo: " . $correo . "<br>";
echo "teléfono: " . $telefono . "<br>";
echo "evento: " . $evento . "<br>";
echo "comentario: " . $comentario . "<br>";
?>