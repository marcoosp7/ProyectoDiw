<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #C2FFE1;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 5px dashed #003D1F;
            width: 50%;
            margin: 0 auto;
        }

        label, input {
            margin: 1% 0;
            font-size: 2em;
        }

        button {
            padding: 1%;
            font-size: 1.5em;
           
        }
        #portada{
            margin-top: 2%;
        }
    </style>
</head>

<body>
    <form>
        <label>Nombre</label>
        <input type="text" id="nombre">
        <label>Email</label>
        <input type="email" id="mail">
        <button>Enviar</button>
        <a href="index.html"><button id="portada">REGRESAR A LA PORTADA</button></a>
    </form>
</body>

</html>
