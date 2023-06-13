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

    // Insertar noticia
    if (isset($_POST['enviar'])) {
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['titulo']) >= 1 && strlen($_POST['descripcion']) >= 1 &&  strlen($_POST['fecha']) >= 1 && strlen($_POST['num_celular']) >= 1) {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $titulo = trim($_POST['titulo']);
            $descripcion = trim($_POST['descripcion']);
            $fecha = trim($_POST['fecha']);
            $num_celular = trim($_POST['num_celular']);
            $consulta = "INSERT INTO noticia(nombre, apellido, titulo, descripcion, fecha, num_celular) VALUES ('$nombre','$apellido','$titulo','$descripcion','$fecha','$num_celular')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                echo'<script>alert("¡Se agrego correctamente!");</script>';
            } else {
                echo'<script>alert("¡Ups, ha ocurrido un error al insertar la noticia!");</script>';
            }
        } else {
            echo '<h3 class="bad">¡Por favor completa todos los campos!</h3>';
        }
    }

    // Eliminar noticia
    if (isset($_GET['eliminar'])) {
        $idEliminar = $_GET['eliminar'];
        $consulta = "DELETE FROM noticia WHERE id = '$idEliminar'";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            echo'<script>alert("¡Noticia eliminada correctamente!");</script>';
        } else {
            echo'<script>alert("¡Ups, ha ocurrido un error al eliminar el registro!");</script>';
        }
    }

    // Modificar noticia
    if (isset($_POST['modificar'])) {
        $idModificar = $_POST['id_modificar'];
        $nombre = trim($_POST['nombre_modificar']);
        $apellido = trim($_POST['apellido_modificar']);
        $titulo = trim($_POST['titulo_modificar']);
        $descripcion = trim($_POST['descripcion_modificar']);
        $fecha = trim($_POST['fecha_modificar']);
        $num_celular = trim($_POST['num_celular_modificar']);
        $consulta = "UPDATE noticia SET nombre = '$nombre', apellido = '$apellido', titulo = '$titulo', descripcion = '$descripcion', fecha = '$fecha', num_celular = '$num_celular' WHERE id = '$idModificar'";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            echo'<script>alert("¡Noticia modificada correctamente!");</script>';
        } else {
            echo'<script>alert("¡Ups, ha ocurrido un error al modificar el registro!");</script>';
        }
    }


    ?>

</html>