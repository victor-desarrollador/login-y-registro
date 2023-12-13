<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn_iniciar_sesion">Iniciar Sesión </button>
                </div>
                <div class="caja_trasera_register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn_registarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login_register">
                <form action="php/login_usuario_br.php" method="post" class="formulario__login">
                    <h2>Iniciar Sesíon</h2>
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="password" placeholder=" Contraseña" name="contraseña">
                    <button>Entrar</button>
                </form>

                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Resgistrarse</h2>
                    <input type="text"  placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="text" placeholder="Contraseña" name="contraseña">
                    <button>Resgistrarse</button>
                </form>
            </div>
        </div>

    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>