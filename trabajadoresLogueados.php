<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: green;
    }
</style>
<body>
    <h1>Hola <?php echo $_SESSION['usuario']; ?></h1>
    <form action="trabajadores.php" method="post">
        <input type="submit" value="Log out">
    </form>
    <?php
    // Iniciar la sesión
    session_start();

    // Destruir la sesión al hacer clic en el botón
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: trabajadores.php");
        exit();
    }
    ?>
</body>
</html>
