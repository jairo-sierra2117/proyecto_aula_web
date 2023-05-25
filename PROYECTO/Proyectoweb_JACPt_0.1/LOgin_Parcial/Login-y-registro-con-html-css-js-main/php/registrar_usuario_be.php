<?php
 
  include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$Contrasena = $_POST['contrasena'];


$query = "INSERT INTO usuarios( Nombre_comp, Correo, Usuario,Contrasena) 
VALUES ('$nombre_completo','$correo','$usuario','$Contrasena')";

$ejecutar = mysqli_query($conn, $query);

if ($ejecutar) {
  echo'
  <script>
  alert("Usuario almacenado correctamente");
  window.location = "../index.php";
  </script>
  
  ';
}
