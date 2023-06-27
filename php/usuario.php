<?php
    
    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];


    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contrasena='$contrasena'");
    
    if(mysqli_num_rows($validar_login) > 0){
        echo '
        <script>
            alert("Cargo correctamente la pagina");
            window.location= "../index.html";
        </script>
        ';    
        exit;
    }else{
        echo '
        <script>
            alert("El usuario no existe, por favor verifique los datos 
            introducidos");
            window.location= "../registro.html";
        </script>
        ';
        exit;
}

?>
