<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>JAC Patio Centro</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/lightbox.css">
    
    <link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">

</head>
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

<h1 style="margin-top:120px">CURSOS</h1>
<?php
include("registro.php");
// Obtener los datos de la tabla 'datos'
    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query($conex, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        // Mostrar los resultados en una tabla
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Descripción</th>";
        echo "<th>Fecha de Registro</th>";
        echo "<th>Duración</th>";
        echo "<th>Certificado</th>";
        echo "<th>Inicio</th>";
        echo "<th>Acciones</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['descripcion']."</td>";
            echo "<td>".$row['fecha_reg']."</td>";
            echo "<td>".$row['duracion']."</td>";
            echo "<td>".$row['certificado']."</td>";
            echo "<td>".$row['inicio']."</td>";
            echo "<td>";
            echo '<a href="?eliminar='.$row['id'].'" onclick="return confirm(\'¿Estás seguro de eliminar este registro?\')">Eliminar</a> ';
            echo '<a href="#" onclick="mostrarFormularioModificar(\''.$row['id'].'\', \''.$row['nombre'].'\', \''.$row['descripcion'].'\', \''.$row['duracion'].'\')">Modificar</a>';
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No se encontraron registros.</p>";
    }

    // Liberar memoria
    mysqli_free_result($resultado);
    mysqli_close($conex);
    ?>

    <script>
    function mostrarFormularioModificar(id, nombre, descripcion, duracion) {
        document.getElementById('id_modificar').value = id;
        document.getElementById('nombre_modificar').value = nombre;
        document.getElementById('descripcion_modificar').value = descripcion;
        document.getElementById('duracion_modificar').value = duracion;
        document.getElementById('formulario_modificar').style.display = 'block';
    }
    </script>

    <div id="formulario_modificar" style="display: none;">
        <h3>Modificar Registro</h3>
        <form action="" method="post">
            <input type="hidden" name="id_modificar" id="id_modificar">
            <label for="nombre_modificar">Nombre:</label>
            <input type="text" name="nombre_modificar" id="nombre_modificar" required>
            <label for="descripcion_modificar">Descripción:</label>
            <input type="text" name="descripcion_modificar" id="descripcion_modificar" required>
            <label for="duracion_modificar">Duración:</label>
            <input type="text" name="duracion_modificar" id="duracion_modificar" required>
            <input type="submit" name="modificar" value="Modificar">
        </form>
    </div>
</body>
</html>