<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciarr sesión);
                window.location = "../index.html";
            </script>
        ';
        session_destroy();
        die();
    }
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
    <h2>Pagina</h2>
    <a href="../index.html">Ir a pagina de inicio</a>
</body>
</html>