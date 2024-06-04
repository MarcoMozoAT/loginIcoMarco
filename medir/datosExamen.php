<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/datosExamem.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Medir-2023</title>
</head>
<body>
    <header>
        <div class="imgC">
            <img src="../img/logo.png" alt="Logo">
        </div>
        <h1 class="titulo">Medir 2023</h1>
        <a href="inicio.php"><i class="fas fa-arrow-left"></i></a>
    </header>

    <button class="boton-regresar">Regresar</button>
    <div>
        <div class="contenedor-formulario">
            <h1>Datos del candidato</h1> 
            <hr class="divisor"> 
            <form>
                <label for="opciones">Plantel:</label>
                <select id="opciones" name="opciones">
                    <option value="opcion1"></option>
                    <option value="opcion1">Opción 1</option>
                    <option value="opcion2">Opción 2</option>
                    <option value="opcion3">Opción 3</option>
                </select><br><br>

                <label for="opciones">Titulo:</label>
                <select id="opciones" name="opciones">
                    <option value="opcion1"></option>
                    <option value="opcion1">Opción 1</option>
                    <option value="opcion2">Opción 2</option>
                    <option value="opcion3">Opción 3</option>
                </select><br><br>

                <label for="nombre">Nombre(s):</label>
                <input type="text" id="nombre" name="nombre"><br><br>

                <label for="email">Apellidos:</label>
                <input type="text" id="email" name="email"><br><br>

                <label for="mensaje">Fecha Nacimiento:</label>
                <input type="date" id="email" name="email"><br><br>

                <label for="mensaje">CURP:</label>
                <input type="text" id="email" name="email"><br><br>

                <label for="opciones">Evaluacion:</label>
                <select id="opciones" name="opciones">
                    <option value="opcion1"></option>
                    <option value="opcion2">Opción 2</option>
                    <option value="opcion3">Opción 3</option>
                </select><br><br>
               <a href="examen.html" class="buttonC">Comenzar Examen</a>
            </form>
        </div>
    </div>
</body>
</html>