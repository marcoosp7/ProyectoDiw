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
            color: #003D1F;
            font-weight: bolder;
        }

        button {
            padding: 1%;
            font-size: 1.5em;
        }

        #portada {
            margin-top: 2%;
            display: block;
            padding: 1%;
            font-size: 1.5em;
            text-align: center;
            background-color: #003D1F;
            color: #C2FFE1;
            text-decoration: none;
            border: none;
            cursor: pointer;
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
    </form>
    <a href="index.html" id="portada">REGRESAR A LA PORTADA</a>
</body>

</html>
