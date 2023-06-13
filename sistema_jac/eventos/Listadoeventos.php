<!DOCTYPE html>
<html>
<head>
    <title>Listado de asistentes a los eventos</title>
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="../assets/css/checkout.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/estilo_Evento.css">
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell


-->

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    width: 100%;
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }

  .btn-bd-primary {
    --bd-violet-bg: #712cf9;
    --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

    --bs-btn-font-weight: 600;
    --bs-btn-color: var(--bs-white);
    --bs-btn-bg: var(--bd-violet-bg);
    --bs-btn-border-color: var(--bd-violet-bg);
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: #6528e0;
    --bs-btn-hover-border-color: #6528e0;
    --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
    --bs-btn-active-color: var(--bs-btn-hover-color);
    --bs-btn-active-bg: #5a23c8;
    --bs-btn-active-border-color: #5a23c8;
  }
  .bd-mode-toggle {
    z-index: 1500;
  }
</style>

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
      <li><a href="../eventos/Eventos.php">Volver</a></li>

    </ul>
  </div>
  </header>
  <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/images/Logo_0122.png" alt="" style="height: 250px ; width: 250px;">
    </div>
</head>
<h4 class="mb-3">EVENTOS DISPONIBLES</h4>
<?php

    include("Registroeventos.php");


    // Obtener los datos de la tabla 'inscripción eventos'
    $consulta = "SELECT * FROM eventos";
    $resultado = mysqli_query($conex, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        // Mostrar los asisitente con sus respectivos eventos
       
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Evento</th>";
        echo "<th>Descripcion</th>";
        echo "<th>Fecha</th>";
        echo "<th>Hora</th>";
        echo "<th>Lugar</th>";
        echo "<th>Opcion</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['evento']."</td>";
            echo "<td>".$row['descripcion']."</td>";
            echo "<td>".$row['fecha']."</td>";
            echo "<td>".$row['hora']."</td>";
            echo "<td>".$row['lugar']."</td>";
            echo "<td>";
            echo '<a href="?eliminar='.$row['evento'].'" onclick="return confirm(\'¿Estás seguro de eliminar este registro?\')">Eliminar</a> ';
            echo '<a href="#" onclick= "mostrarFormularioModificarDato( \''.$row['id'].'\',\''.$row['evento'].'\', \''.$row['descripcion'].'\', \''.$row['fecha'].'\', \''.$row['hora'].'\', \''.$row['lugar'].'\')">Modificar</a>';
            //echo '<a href="Modificarevento.php">Modificar</a>';
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No se encontraron Eventos.</p>";
    }


    // Liberar memoria
    mysqli_free_result($resultado);
    mysqli_close($conex);
    ?>
    <script>
    function mostrarFormularioModificarDato(id, evento, descripcion, fecha, hora, lugar) {
        document.getElementById('id_modificar').value = id;
        document.getElementById('evento_modificar').value = evento;
        document.getElementById('descripcion_modificar').value = descripcion;
        document.getElementById('fecha_modificar').value = fecha;
        document.getElementById('hora_modificar').value = hora;
        document.getElementById('lugar_modificar').value = lugar;
        document.getElementById('formulario_modificar').style.display = 'block';
    }
    </script>
       <div id="formulario_modificar" style="display: none;">
        <h3>MODIFICAR EVENTO</h3>
        <form action="" method="post">
        <input type="hidden" name="id_modificar" id="id_modificar">
            <label for="evento_modificar">Evento:</label>
            <input type="text" name="evento_modificar" id="evento_modificar" required>
            <label for="descripcion_modificar">Descripcion:</label>
            <input type="text" name="descripcion_modificar" id="descripcion_modificar" required>
            <label for="fecha_modificar">Fecha:</label>
            <input type="text" name="fecha_modificar" id="fecha_modificar" required>
            <label for="hora_modificar">Hora:</label>
            <input type="text" name="hora_modificar" id="hora_modificar" required>
            <label for="lugar_modificar">Lugar:</label>
            <input type="text" name="lugar_modificar" id="lugar_modificar" required>
            <input type="submit" name="modificar" value="Modificar">
        </form>
    </div>

    </body>
</html>