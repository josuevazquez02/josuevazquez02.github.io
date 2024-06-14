<?php

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../principal.php");
        exit;
    }else{
        echo'
        <script>
            alert("Usuario o contraseña incorrectos");
            window.location = "../index.php";
        </script>
        ';
        exit;
    }
    mysqli_close($conexion);
?>