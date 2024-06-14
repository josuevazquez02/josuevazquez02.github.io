<?php
include 'conexion_be.php';

$query = "SELECT * FROM productos";
$result = mysqli_query($conexion, $query);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="item">';
        echo '<figure>';
        echo '<img src="ruta/donde/guardar/imagenes/' . $row['imagen'] . '" alt="producto">';
        echo '</figure>';
        echo '<div class="info-producto">';
        echo '<h2>' . $row['nombre'] . '</h2>';
        echo '<p class="precio">$' . $row['precio'] . '</p>';
        echo '<button class="btn-add-cart">Comprar</button>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>No hay productos disponibles.</p>';
}

mysqli_close($conexion);
?>
