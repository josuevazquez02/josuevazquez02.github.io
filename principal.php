<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Venta de electronicos</title>
    <link rel="stylesheet" href="assets/css/estilo_pagina_principal.css">
</head>

<body>

    <!-- Contenedor del lado izquierdo -->
    <div class="sidebar">
        <div class="contenedor-izquierda">
            <h1 class="Tienda">Tienda de electronicos</h1>
            <div class="botones-sidebar">
                <button class="btn-sidebar" id="btn-tienda">Tienda</button>
                <button class="btn-sidebar" id="btn-agregar-productos">Agregar producto</button>
                <button class="btn-sidebar" id="btn-carrito">Carrito</button>
                <button class="btn-sidebar" id="btn-graficas">Graficas</button>

            </div>
        </div>
    </div>

    <!-- Contenedor de la barra de arriba -->
    <header>
        <h1>Inicio</h1>
        <img class="icono-inicio" src="assets/images/Inicio.png" alt="">
        <div class="container-icon">
            <div class="container-cart-icon">
                <img class="icono-targeta" src="assets/images/Bolsajpg.png" alt="">
                <div class="count-products">
                    <span id="contador-productos">0</span>
                </div>
            </div>
            <div class="container-cart-products
                         hidden-cart">
                <div class="row-product">

                    <div class="cart-product">
                        <div class="info-cart-product">
                            <span class="cantidad-producto-carrito">s/n</span>
                            <p class="titulo-producto-carrito">producto</p>
                            <span class="precio-producto-carrito">precio</span>
                        </div>
                        <img class="icon-close" src="assets/images/cancel.png" alt="">
                    </div>

                </div>

                <div class="cart-total">
                    <h3>Total</h3>
                    <span class="pagar">$0</span>
                </div>
            </div>
    </header>

    <!--Contenedor de tienda-->
    <div class="main-content 
    hidden-main-content">
        <div class="bienvenido">
            <h2>bienvenido</h2>
        </div>
        <div class="panel-bienvenida">
            <h3>Tienda</h3>
        </div>

        <img class="fondo_1" src="assets/images/Login.jpg" alt="fondo">


        <div class="container-item">
            <div class="item">
                <figure>
                    <img src="assets/images/producto1.jpg" alt="producto">
                </figure>
                <div class="info-producto">
                    <h2>Audifonos</h2>
                    <p class="precio">$350</p>
                    <button class="btn-add-cart">Comprar</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="assets/images/producto3.jpg" alt="producto">
                </figure>
                <div class="info-producto">
                    <h2>Ipod</h2>
                    <p class="precio">$1500</p>
                    <button class="btn-add-cart">Comprar</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="assets/images/producto4.jpg" alt="producto">
                </figure>
                <div class="info-producto">
                    <h2>Camara</h2>
                    <p class="precio">$3500</p>
                    <button class="btn-add-cart">Comprar</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="assets/images/producto5.jpg" alt="producto">
                </figure>
                <div class="info-producto">
                    <h2>Mouse</h2>
                    <p class="precio">$1000</p>
                    <button class="btn-add-cart">Comprar</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="assets/images/producto2.jpg" alt="producto">
                </figure>
                <div class="info-producto">
                    <h2>Audifonos HTC</h2>
                    <p class="precio">$2000</p>
                    <button class="btn-add-cart">Comprar</button>
                </div>
            </div>
        </div>
    </div>

    <!--Contenedor agregar productos-->
    <div class="contenedor-agregar-productos
    hidden-contenedor-agregar-productos">
        <div class="bienvenido">
            <h2>Productos</h2>
        </div>
        <div class="panel-bienvenida">
            <h3>Agregar productos</h3>
        </div>

        <div class="container-campos">

            <div class="fondo-agregar">
                <img src="assets/images/fondo_agregar.jpg" alt="">
            </div>
            <div class="panel-agregar">
                
                <form action="php/agregar_producto.php" method="post" class="producto-registrar">
                    <h2>Nuevo producto</h2>

                    <p>Producto</p>
                    <input type="text" name="dato_producto">

                    <p>Precio</p>
                    <input type="number" name="dato_precio">

                    <p>Stock</p>
                    <input type="number" name="dato_stock">

                    <p>Imagen</p>
                    <input type="file" name="dato_imagen">

                    <button class="btn-agregar" id="btn-agregar-nuevo">Aceptar</button>
                </form>
                
            </div>

        </div>

    </div>

    <!--Contenedor carrito-->
    <div class="contenedor-carrito hidden-contenedor-carrito">
        <div class="bienvenido">
            <h2>Bienvenido</h2>
        </div>
        <div class="panel-bienvenida">
            <h3>Carrito</h3>
        </div>
        <button class="generarPDF" onclick="generatePDF()" id="generatePDF">Generar PDF</button>
        <div class="text-right">
            <a href="correo.html" class="btn btn-success">Generar Reporte</a>
        </div>
    </div>
    
    <script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
    <script>
        function generatePDF(){
            var pdfObject = jsPDFInvoiceTemplate.default(props); 
            console.log("Object created:", pdfObject);  
        }
    </script>
    

    <!--Contenedor graficas-->
    <div class="contenedor-graficas
    hidden-contenedor-graficas">
        <div class="bienvenido">
            <h2>bienvenido</h2>
        </div>
        <div class="panel-bienvenida">
            <h3>Graficas</h3>
            <form action="php/graficas.php" method="post">
                <input type="submit" name="graficas" class="">
            </form>
        </div>
    </div>

    <script src="assets/js/script_principal.js"></script>
</body>

</html>
