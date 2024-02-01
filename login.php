<?php
session_start();

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $checkUser = ["marcos", "oscar", "rio"];
    $checkPasswordHash = password_hash("cocodrilo", PASSWORD_DEFAULT);

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if (in_array(strtolower($user), $checkUser) && password_verify($pass, $checkPasswordHash)) {
        $_SESSION['usuario'] = $user;
        header("Location: trabajadoresLogueados.php");
        exit();
    } else {
        $_SESSION['error'] = "Error en la conexión";
        header("Location: trabajadores.php");
        exit();
    }
}
?>
