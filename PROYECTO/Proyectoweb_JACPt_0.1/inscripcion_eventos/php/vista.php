<?php
    // Verificar si se recibieron los datos
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['telefono']) && isset($_POST['evento']) && isset($_POST['comentarios'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $evento = $_POST['evento'];
        $comentarios = $_POST['comentarios'];
        
        // Mostrar los datos en una tabla
        echo '<table>';
        echo '<tr><th>Dato</th><th>Valor</th></tr>';
        echo '<tr><td>Nombre</td><td>' . $nombre . '</td></tr>';
        echo '<tr><td>Apellido</td><td>' . $apellido . '</td></tr>';
        echo '<tr><td>Correo</td><td>' . $correo . '</td></tr>';
        echo '<tr><td>Teléfono</td><td>' . $telefono . '</td></tr>';
        echo '<tr><td>Evento</td><td>' . $evento . '</td></tr>';
        echo '<tr><td>Comentarios</td><td>' . $comentarios . '</td></tr>';
        echo '</table>';
    } else {
        echo '<p>No se recibieron datos.</p>';
    }
    ?>