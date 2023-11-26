<?php 
    session_start();
    //Destroi uma sessão, basicamente faz com que o usuario tenha que logar dnv
    session_destroy();

    //indica para qual página vai após a destruição da sessão
    header('Location: login.php');
?>