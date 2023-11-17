<?php
  require_once("../../dao/AdminDao.php");
  require_once(__DIR__.'../../../model/Admin.php');
  
  $admin = new Admin();


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $adminDao = AdminDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n"; 
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $admin->setNome($_POST['nome']);
    $admin->setSobrenome($_POST['sobrenome']);
    $admin->setCpf($_POST['cpf']);
    $admin->setNasc($_POST['nasc']);
    $admin->setEmail($_POST['email']);
    $admin->setPassword($_POST['senha']);
    $admin->setImagem($admin->salvarImagem($_POST['nomeFoto'])); 
    $admin->setToken($admin->generateToken());
    try {
      $adminDao = AdminDao::insert($admin);
      header("Location: index.php");
    } catch (Exception $e) {
     // echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        header("Location: register.php");
    } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $admin->setNome($_POST['nome']);
        $admin->setSobrenome($_POST['sobrenome']);
        $admin->setCpf($_POST['cpf']);
        $admin->setNasc($_POST['nasc']);
        $admin->setEmail($_POST['email']);
        $admin->setPassword($_POST['senha']);
        $admin->setImagem($admin->salvarImagem($_POST['nomeFoto'])); 
        $admin->setToken($admin->generateToken());
        try {
          $adminDao = AdminDao::update($_POST["idAdmin"], $admin);
        
          header("Location:index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $adminDao = AdminDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }








?>
