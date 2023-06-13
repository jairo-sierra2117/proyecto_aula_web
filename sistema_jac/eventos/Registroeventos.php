<!DOCTYPE html>
<html>
<head>
    <title>Registro de eventos</title>
    <style>
        
    </style>
</head>
<body>
    <?php
    include("../conexion.php");

        // Insertar datos
        if (isset($_POST['enviar'])) {
            if (strlen($_POST['evento']) >= 1 && strlen($_POST['descripcion']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['hora']) >= 1 && strlen($_POST['lugar']) >= 1 ) {
                $evento = trim($_POST['evento']);
                $descripcion = trim($_POST['descripcion']);
                $fecha = trim($_POST['fecha']);
                $hora = trim($_POST['hora']);
                $lugar = trim($_POST['lugar']);
                $consulta = "INSERT INTO eventos(evento, descripcion, fecha, hora, lugar) VALUES ('$evento','$descripcion','$fecha','$hora','$lugar')";
                $resultado = mysqli_query($conex,$consulta);
               
    
                if ($resultado) {
                    echo '<script>alert("¡Evento Inscrito correctamente!");</script>';
                } 
                else {
                    echo '<script>alert("¡Ups, ha ocurrido un error al inscribir este evento!");</script>';
                }
            } else {
                echo '<script>alert("¡Por favor completa todos los campos!");</script>';
            }
        }
        
    // Anular evento
    if (isset($_GET['eliminar'])) {
        $idEliminar = $_GET['eliminar'];
        $consulta = "DELETE FROM eventos WHERE evento = '$idEliminar'";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            echo '<script>alert("¡Evento eliminado correctamente!");</script>';
        } else {
            echo '<script>alert("¡Ups, ha ocurrido un error al eliminar el evento!");</script>';
        }
    }
   // Modificar evento
   if (isset($_POST['modificar'])) {
    $idModificar = $_POST['id_modificar'];
    $evento = $_POST['evento_modificar'];
    $descripcion = trim($_POST['descripcion_modificar']);
    $fecha = trim($_POST['fecha_modificar']);
    $hora = trim($_POST['hora_modificar']);
    $lugar = trim($_POST['lugar_modificar']);
    $consulta = "UPDATE eventos SET evento = '$evento', descripcion = '$descripcion', fecha = '$fecha', hora = '$hora', lugar = '$lugar' WHERE Id = '$idModificar'";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {
        echo '<script>alert("Tus cambios fueron hechos exitosamente!");</script>';
    } else {
        echo '<script>alert("¡Ups, ha ocurrido un error al modificar los datos!");</script>';
    }
}

    ?>

</body>
</html>