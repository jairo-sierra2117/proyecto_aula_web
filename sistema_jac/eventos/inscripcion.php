<!DOCTYPE html>
<html>
<head>
    <title>CRUD MySQL</title>
    <style>
        
    </style>
</head>
<body>
    <?php
    include("../conexion.php");

    // Insertar datos
    if (isset($_POST['enviar'])) {
        if (strlen($_POST['cedula']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['evento']) >= 1 && strlen($_POST['comentarios']) >= 1) {
            $cedula = trim($_POST['cedula']);
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $correo = trim($_POST['correo']);
            $telefono = trim($_POST['telefono']);
            $evento = trim($_POST['evento']);
            $comentarios = trim("comentarios");
            $consulta = "INSERT INTO inscripcion_evento(cedula, nombre, apellido, correo, telefono, evento, comentarios) VALUES ('$cedula','$nombre','$apellido','$correo','$telefono', '$evento','$comentarios')";
            $resultado = mysqli_query($conex,$consulta);
           

            if ($resultado) {
                echo '<script>alert("¡Te has inscrito correctamente!");</script>';
               
            } 
            else {
                echo '<script>alert("¡Ups, ha ocurrido un error al insertar los datos!");</script>';
            }
        } else {
            echo '<script>alert("¡Por favor llena todos los campos!");</script>';
        }
    }

    ?>

</body>
</html>