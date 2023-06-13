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
</body>
<form method="post" enctype="multipart/form-data">
    <h1>¡Nuevo Curso!</h1>
    <input type="text" name="nombre" placeholder="Nombre del curso" required>
    <textarea name="descripcion" placeholder="Descripción" required></textarea>
    <input type="text" name="duracion" placeholder="Duración del curso" required>
    <input type="text" name="inicio" placeholder="Fecha de inicio del curso: a/d/m" required>
    <input type="text" name="certificado" placeholder="# de certificados" required>
    <input type="submit" name="enviar" value="Crear Curso">
</form>
	<?php 
	include("prueba_curso.php");
	?>
</body>
</html>



