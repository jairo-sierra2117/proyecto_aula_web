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
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['descripcion']) >= 1 && strlen($_POST['duracion']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $descripcion = trim($_POST['descripcion']);
        $fechareg = date("d/m/y");
        $duracion = trim($_POST['duracion']);
        $inicio = trim($_POST['inicio']);
        $certificado = trim($_POST['certificado']);


        $consulta = "INSERT INTO datos(nombre, descripcion, fecha_reg, duracion, certificado, inicio) VALUES ('$nombre','$descripcion','$fechareg','$duracion', '$certificado','$inicio')";
        $declaracion = mysqli_prepare($conex, $consulta);
        


        $resultado = mysqli_stmt_execute($declaracion);
        
        if ($resultado) {
            echo'<script>alert("Curso inscrito correctamente");</script>';
        } else {
            echo'<script>alert("¡Ups, ha ocurrido un error al insertar los datos!");</script>';
        }
    } else {
        echo '<h3 class="bad">¡Por favor completa todos los campos!</h3>';
    }
}
    // Eliminar datos
    if (isset($_GET['eliminar'])) {
        $idEliminar = $_GET['eliminar'];
        $consulta = "DELETE FROM datos WHERE id = '$idEliminar'";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            echo '<h3 class="ok">¡Registro eliminado correctamente!</h3>';
        } else {
            echo '<h3 class="bad">¡Ups, ha ocurrido un error al eliminar el registro!</h3>';
        }
    }

    // Modificar datos
    if (isset($_POST['modificar'])) {
        $idModificar = $_POST['id_modificar'];
        $nombre = trim($_POST['nombre_modificar']);
        $descripcion = trim($_POST['descripcion_modificar']);
        $duracion = trim($_POST['duracion_modificar']);
        $consulta = "UPDATE datos SET nombre = '$nombre', descripcion = '$descripcion', duracion = '$duracion' WHERE id = '$idModificar'";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            echo '<script>alert("¡Curso modificado correctamente!");</script>';
        } else {
            echo '<h3 class="bad">¡Ups, ha ocurrido un error al modificar el registro!</h3>';
        }
    }

    

    ?>
</body>
</html>

