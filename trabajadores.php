<?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<p>Error: " . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h2{
        font-family:Georgia, 'Times New Roman', Times, serif;
        color: #003D1F;
        font-size: 3em;
        border: 5px dashed #003D1F;
        width: 43%;

        margin-top: 5%;
        margin-bottom: 2%;
        text-align: center;
        margin: 0 auto;
    }
    
    body{
        background-color: #C2FFE1;
        margin-top: 5%;
        
    }
    
    a{
        color: #FCE5C4;
        text-decoration: none;
        font-size: 1.5em;
    }
    button{
        padding: 1%;
    }
    #formu{
        border: 5px dashed #003D1F;
        width: 43%;
        margin: 0 auto;
    }
    label,input, button{
        margin: 1%;
        font-size: 2em;
    }

    /* Agrega este estilo */
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label, input {
        margin: 1% 0;
        font-size: 2em;
    }
    #portada{
        margin-left: 11%;
    }

    
</style>
<body>
    <h2>ACCESO PARA TRABAJADORES</h2>
    <div id="formu">
        <form method="post" action="login.php">
            <label for="usuario">Usuario:</label>
            <input type="text" id="user" name="user">
            <br>
            <label for="passw">Contraseña:</label>
            <input type="password" id="pass" name="pass">
            <br>
            <button id="btn" name="btn">Log in</button>
        </form>
        <a href="index.html"><button id="portada">REGRESAR A LA PORTADA</button></a>
    </div>
    
</body>
</html>