<?php
session_start(); // Iniciar sesión (debe estar al principio del archivo)

include '../conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM login_usuario WHERE correo = '$correo' AND contrasena = '$contrasena'";
$resultado = mysqli_query($conex, $sql);

// Verificar si se encontraron registros
if (mysqli_num_rows($resultado) > 0) {
    echo '<h3 class="ok">¡Inicio correctamente!</h3>';

    header("Location: bienvenida.php");
    exit();
} else {
    echo '<h3 class="ok">¡Inscrito correctamente!</h3>';
}

?>



