<!DOCTYPE html>
<html>
<head>
    <title>Listado de Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete-link {
            color: #f00;
            text-decoration: none;
        }

        .delete-link:hover {
            text-decoration: underline;
        }

        .message {
            margin-top: 10px;
            padding: 10px;
            background-color: #f2f2f2;
            color: #333;
        }

        

        h1 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        .delete-link {
            color: #0D6EFD;
            text-decoration: none;
        }

        .delete-link:hover {
            text-decoration: underline;
        }

        .message {
            margin-top: 10px;
            padding: 10px;
            background-color: #e6e6e6;
            color: #333;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<style>
    .navbar {
      background-color: green;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    .navbar li {
      display: inline-block;
      margin-right: 10px;
    }

    .navbar li a {
      display: block;
      padding: 10px;
      color: #fff;
      text-decoration: none;
    }

    .navbar .welcome-text {
      color: #fff;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="navbar"><span class="welcome-text">Bienvenido(a)</span>

    <ul>
      <li><a href="../Login_y_registro/bienvenida.php">Inicio</a></li>
      <li><a href="../cursos/curso_cliente.php">Cursos inscritos</a></li>
      <li><a href="../cursos/listar_registro.php">Personas inscritas</a></li>
    </ul>
  </div>
    <div class="container">
        <h1>Listado de Usuarios</h1>

        <?php
            include("../conexion.php");


        // Verificar si se ha enviado una solicitud de eliminación
        if (isset($_GET['eliminar'])) {
            $idEliminar = $_GET['eliminar'];

            // Preparar la consulta SQL para eliminar el registro
            $sqlEliminar = "DELETE FROM usuarios WHERE id = $idEliminar";

            // Ejecutar la consulta de eliminación
            if (mysqli_query($conex, $sqlEliminar)) {
                echo'<script>alert("Registro eliminado exitosamente.");</script>';
                echo "<div class='message'>Registro eliminado exitosamente.</div>";
            } else {
                echo "<div class='message'>Error al eliminar el registro: " . mysqli_error($conex) . "</div>";
            }
        }

        // Obtener los cursos únicos
        $sql_cursos = "SELECT DISTINCT curso FROM usuarios";
        $resultado_cursos = mysqli_query($conex, $sql_cursos);

        // Verificar si se obtuvieron cursos
        if (mysqli_num_rows($resultado_cursos) > 0) {
            // Recorrer los cursos y mostrar los datos en grupos separados en la tabla
            while ($fila_curso = mysqli_fetch_assoc($resultado_cursos)) {
                $curso_actual = $fila_curso['curso'];

                // Imprimir encabezado del grupo de cursos
                echo "<h2>$curso_actual</h2>";

                // Preparar la consulta SQL para obtener los datos del curso actual
                $sql_datos_curso = "SELECT * FROM usuarios WHERE curso='$curso_actual'";
                $resultado_datos_curso = mysqli_query($conex, $sql_datos_curso);

                // Verificar si se obtuvieron resultados para el curso actual
                if (mysqli_num_rows($resultado_datos_curso) > 0) {
                    // Imprimir tabla para los datos del curso actual
                    echo "<table>";
                    echo "<tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Cédula</th>
                            <th>Dirección</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Acciones</th>
                        </tr>";

                    // Recorrer los resultados y mostrar los datos en filas de la tabla
                    while ($fila = mysqli_fetch_assoc($resultado_datos_curso)) {
                        echo "<tr>";
                        echo "<td>" . $fila['id'] . "</td>";
                        echo "<td>" . $fila['nombre'] . "</td>";
                        echo "<td>" . $fila['cedula'] . "</td>";
                        echo "<td>" . $fila['direccion'] . "</td>";
                        echo "<td>" . $fila['edad'] . "</td>";
                        echo "<td>" . $fila['sexo'] . "</td>";
                        echo "<td><a class='delete-link' href='?eliminar=" . $fila['id'] . "'>Eliminar</a></td>";
                        echo "</tr>";
                    }

                    // Cerrar la etiqueta de la tabla para el curso actual
                    echo "</table>";
                } else {
                    echo "<p>No se encontraron registros para el curso: $curso_actual</p>";
                }
            }
        } else {
            echo "<p>No se encontraron cursos.</p>";
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conex);
        ?>
    </div>
</body>
</html>






