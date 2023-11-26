<?php
 require_once ('../../dao/CategoriaDao.php');
 require_once __DIR__.'../../../model/Categoria.php';

 $categoria = new Categoria();


 switch ($_POST["acao"]) {
  
  case 'DELETE':
   try {
        $categoriaDao = CategoriaDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      //echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    var_dump($_POST);

    //pode validar as informações
    $categoria->setNome($_POST['nomeCategoria']);
    $categoria->setDescCategoria($_POST['descCategoria']);
    
    try {
      $categoriaDao = CategoriaDao::cadastrarCategoria($categoria);
      //$msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      //echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      //$msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      //header("Location: register.php");
    } 
    break;
    
  case 'ATUALIZAR':
        //pode validar as informações
        $categoria->getNome($_POST['nomeCategoria']);
        $categoria->getDescCategoria($_POST['descCategoria']);
        try {
          $categoriaDao = CategoriaDao::update($_POST["idCategoria"], $categoria);
          //$msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        } 
    break;

  case 'SELECTID':
    try {
        $categoriaDao = CategoriaDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        //echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 
    break;
  }

?>