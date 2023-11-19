<?php
 require_once ('../../dao/ProdutoDao.php');
 require_once __DIR__.'../../../model/Produto.php';

 $produto = new Produto();


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $userDao = ProdutoDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      //echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $produto->setNome($_POST['nome']);
    $produto->setDesc($_POST['descricao']);
    $produto->setPreco($_POST['preco']);
    $produto->setQntd($_POST['qntd']);
    $produto->setImagem($user->salvarImagem($_POST['nomeFoto'])); 
    $produto->setTipoProduto($_POST['tipoProduto']);
    try {
      $produtoDao = ProdutoDao::cadastrarProduto($produto);
      //$msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      //$msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      header("Location: register.php");
    } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $produto->setNome($_POST['nome']);
        $produto->setDesc($_POST['descricao']);
        $produto->setPreco($_POST['preco']);
        $produto->setQntd($_POST['qntd']);
        $produto->setImagem($user->salvarImagem($_POST['nomeFoto'])); 
        $produto->setTipoProduto($_POST['tipoProduto']);
        try {
          $produtoDao = ProdutoDao::update($_POST["idProduto"], $produto);
          //$msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         //echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $ProdutoDao = ProdutoDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        //echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }

?>