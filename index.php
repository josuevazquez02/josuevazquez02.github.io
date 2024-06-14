<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de Autos</title>
    <link rel="stylesheet" href="assets/css/estiloslogin.css">
</head>
<body>
    
    <main>

        <div class="contenedor__todo">
            <div class="background">
                <div class="background_panel_Login">
                    <h3>¿Ya tienes una Cuenta?</h3>
                    <p>Inicia sesión para entrar a la pagina</p>
                    <button id="button_iniciarsesion">Iniciar sesión</button>
                </div>
    
                <div class="background_panel_register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="button_register">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-register">

                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Usuario" name=usuario>
                    <input type="password" placeholder="Contraseña" name=contraseña>
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name = nombre_completo>
                    <input type="text" placeholder="Correo electronico" name = correo>
                    <input type="text" placeholder="Usuario" name = usuario>
                    <input type="text" placeholder="Contraseña" name = contraseña>
                    <button>Registrarse</button>
                </form>
            </div>

        </div>

    </main>
<script src="assets/js/script.js"></script>
</body>
</html>