<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre, correo, usuario, contrasena) 
    VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

//verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location= "../registro.html";
            </script>
        ';
        exit();
    }

//verificar que el nombre de usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location= "../registro.html";
            </script>
        ';
        exit();
    }
    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location= "../index.html";
            </script>
    
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo usuarrio no almacenado");
            window.location= "../registro.html";
        </script>

    ';

    mysqli_close($conexion);
    } 

?>