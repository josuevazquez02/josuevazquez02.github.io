<?php

include 'conexion_be.php';

$sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="table table-bordered" id="tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($listaProductos as $producto): ?>
            <tr>
                <td><?php echo $producto['id'];?></td>
                <td><?php echo $producto['nombre'];?></td>
                <td><?php echo $producto['precio'];?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
</table>
