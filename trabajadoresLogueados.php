<?php
// Iniciar la sesión
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #C2FFE1;
        }
    </style>
</head>
<body>
    <?php
    
    // Destruir la sesión al hacer clic en el botón
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: trabajadores.php");
        exit();
    }
    ?>

    <h1>BIENVENIDO <?php echo $_SESSION['usuario']; ?></h1>
    
    <form action="trabajadores.php" method="post">
        <input type="submit" name="logout" value="Log out">
    </form>
</body>
</html>
