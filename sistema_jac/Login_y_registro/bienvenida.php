<!DOCTYPE html>
<html>
<head>
  <title>Página de Bienvenida</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-image: url('assets/images/fondooo.jpg');
      background-size: cover;
      background-color: rgba(51, 51, 51, 0.7);
    }

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
      <li><a href="../cursos/curso.php">Cursos</a></li>
      <li><a href="../eventos/Eventos.php">Eventos</a></li>
      <li><a href="../noticia/noticias.php">Noticias</a></li>
      <li><a href="../index.php">Inicio</a></li>
    </ul>
  </div>
</body>
</html>


