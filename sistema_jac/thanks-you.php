<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimiento</title>

    <style>
        /* Estilos generales */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }

        .blur-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('assets/images/contact-pag.png');
            /* Cambia la ruta y el nombre de la imagen de fondo según corresponda */
            background-size: cover;
            background-position: center;
            filter: blur(4px);
            /* Ajusta el valor para cambiar la intensidad del efecto de difuminado */
            z-index: -1;
        }

        .message-card {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            z-index: 1;
            transition: opacity 0.5s ease-in-out;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
    </style>

    <script>
        // Mostrar la tarjeta de agradecimiento al cargar la página
        var messageCard = document.querySelector(".message-card");

        // Esperar a que la página de contacto se haya cargado completamente
        window.onload = function() {
            // Ocultar la página de agradecimiento y redireccionar a la página de contacto después de 2 segundos
            setTimeout(function() {
                var body = document.body;
                body.style.opacity = "0";
                setTimeout(function() {
                    body.style.display = "none";
                    window.location.href = "contact-us.php";
                }, 500);
            }, 2500);
        };
    </script>
</head>

<body>
    <div class="blur-background"></div>

    <div class="message-card">
        <h1>¡Gracias por tu mensaje!</h1>
        <p>Nos pondremos en contacto contigo lo antes posible.</p>
    </div>

    <!-- Tus scripts y otros elementos -->

</body>

</html>