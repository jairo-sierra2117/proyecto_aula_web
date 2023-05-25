<?php
include 'conexion_be.php';

$correo = $_POST['correo'];
$Contrasena = $_POST['contrasena'];

$query = "SELECT * FROM usuarios WHERE correo = '$correo'";
$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);
        
        // Verificar la contraseña
        if (password_hash($Contrasena, $usuario['contrasena'])) {
            // Inicio de sesión exitoso
            $_SESSION['correo'] = $correo;
            header("Location:../bienvenida.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo '
            <script>
            alert("Contraseña incorrecta");
            window.location = "../index.php";
            </script>
            ';
            exit();
        }
    } else {
        // El correo no existe en la base de datos
        echo '
        <script>
        alert("El correo no existe");
        window.location = "../index.php";
        </script>
        ';
        exit();
    }
} else {
    // Error en la consulta SQL
    echo "Error: " . mysqli_error($conn);
    exit();
}

?>