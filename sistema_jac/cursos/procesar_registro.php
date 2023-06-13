<?php

include("../conexion.php");


// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$curso = $_POST['curso'];

// Preparar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO usuarios (nombre, cedula, direccion, edad, sexo, curso) VALUES ('$nombre', '$cedula', '$direccion', $edad, '$sexo', '$curso')";

// Ejecutar la consulta
if (mysqli_query($conex, $sql)) {
    // Redireccionar a la misma página con un mensaje en la URL
    header("Location: procesar_inscripcion.php?mensaje=Registro exitoso");
    exit();
} else {
    echo "Error al registrar el usuario: " . mysqli_error($conex);
}

// Cerrar la conexión a la base de datos
mysqli_close($conex);
?>
