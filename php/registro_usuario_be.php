<?php
    include 'conexion_be.php';

    $nombrecompleto = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contraseña) 
    VALUES('$nombrecompleto', '$correo', '$usuario', '$contraseña')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("Registro exitoso\n Bienvenido");
            window.location = "../index.html";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Registro fallido\n Intentalo de nuevo");
            window.location = "../index.html";
        </script>
        '; 
    }
    mysqli_close($conexion);

?>
