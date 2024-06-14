<?php
include 'conexion_be.php';

$dato = $_POST['dato_producto'];
$precio = $_POST['dato_precio'];
$stock = $_POST['dato_stock'];

// Procesar la imagen
$nombre_imagen = $_FILES['dato_imagen']['name'];
$ruta_temporal = $_FILES['dato_imagen']['tmp_name'];
$ruta_destino = 'ruta/donde/guardar/imagenes/' . $nombre_imagen;
move_uploaded_file($ruta_temporal, $ruta_destino);

$query = "INSERT INTO productos(nombre, precio, stock, imagen)
VALUES ('$dato', '$precio', '$stock', '$nombre_imagen')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Registro exitoso\n Bienvenido");
        window.location = "../principal.php";
    </script>
    ';
}else{
    echo '
    <script>
        alert("Registro fallido\n Inténtalo de nuevo");
        window.location = "../principal.php";
    </script>
    '; 
}
mysqli_close($conexion);
?>
