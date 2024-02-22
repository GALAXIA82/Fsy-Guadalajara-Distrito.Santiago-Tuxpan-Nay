<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <center>
        <audio autoplay controls loop>
        <source src="audio/'Discípulo de Crist.mp3" type="audio/mpeg">
        </audio>
    </center>
    <a href="./index1.php">
    <img src="img/home.gif" alt="">
    </a>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #9CECFB;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #0052D4, #65C7F7, #9CECFB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #0052D4, #65C7F7, #9CECFB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
         margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #C0C0C0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            text-hover
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #0000FF;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
    </style>
</head>

<body>
    <form action="recibir.php" method="post">
        <h1>Registro</h1>
        Nombre: <input type="text" name="nombre"> </br>
        Apellido: <input type="text" name="apellido"> </br>
        Correo: <input type="text" name="email"> </br>
        Contraseña: <input type="password" name="pass"> </br>
        Sexo: <input type="radio" name="sexo" value="M">Masculino
        <input type="radio" name="sexo" value="F">Femenino </br>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>