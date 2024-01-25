<?php
    if(isset($_POST['user']) && isset($_POST['pass'])){
        $checkUser = ["marcos", "oscar", "rio"];
        $checkPassword = "cocodrilo";

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if(in_array($user, $checkUser) && $pass == $checkPassword){
            start_session();
            $_SESSION['usuario'] = $user;
            
            header("Location: trabajadoresLogueados.php");
        } else {
            $error = "Error en la conexión";
            header("Location: trabajadores.php?error=" . urlencode($error));
        }
    }
?>
