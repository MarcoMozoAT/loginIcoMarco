<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-XZtXj3WPvH9Awd5HM4sde2y+bhF5Id1jH3Z4l5m9u53Ej+9WyCBvX4JxFD/5tZ0p6" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <div class="login-container">
            <div class="title-container">
                <h1>Medir</h1>
            </div>
            <img src="img/logo.png" alt="Logo de la aplicación" />
            <form action="medir/inicio.php" method="POST">
          
                <div class="input-container">
                    <select id="country" name="country" required>
                        <option value=""></option>
                        <option value="es">Reforma</option>
                        <option value="mx">Atlixco</option>
                        <option value="ar">Cholula</option>
                    </select>
                    <label for="country">Plantel</label>
                </div>
               
                <div class="input-container">
                    <input type="password" id="password" name="password" required />
                    <label for="password">Contraseña</label>
                </div>

                <div class="button-container">
                    <input type="submit" value="Iniciar Sesión" />
                    <!-- <i class="fas fa-sign-in-alt"></i> -->
                </div>
            </form>
        </div>
    </section>
    <script></script>
</body>
</html>