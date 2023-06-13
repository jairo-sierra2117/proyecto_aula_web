<?php
 
 include '../conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$Contrasena = $_POST['contrasena'];


$consulta = "INSERT INTO login_usuario(nombre_completo, correo, usuario, contrasena) 
VALUES ('$nombre_completo','$correo','$usuario','$Contrasena')";

$resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                echo'<script>alert("¡Te has inscrito correctamente!");</script>';
                
            } else {
                echo '<h3 class="bad">¡Ups, ha ocurrido un error al insertar los datos!</h3>';
            }
