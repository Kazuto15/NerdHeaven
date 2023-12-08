<?php
require_once '../dao/UserDao.php';

$client = UserDao::checkCredentials($_POST['emailUser'], $_POST['senhaUser']);


if($client){
    $authClient = [
        'id' => $client['idUser'],
        'nome' => $client['nomeUser'],
        'email' => $client['emailUser'],
        'img' => $client['imagemUser'],
        'token' => $client['tokenUser']
    ];
        session_start();
        $_SESSION["authClient"] = $authClient;
        header("Location: home.php");
}else{
        header("Location: login.php?status=erro1");  
}



?>