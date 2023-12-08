<?php 
  require_once("../model/User.php");
  require_once ("../dao/UserDao.php");
  if(!empty($_POST)){
    $id_User = $userDao['idUser'];
    $nome_User =  $userDao['nomeUser'];
    $sobrenome_User = $userDao['sobrenomeUser'];
    $cpf_User = $userDao['cpfUser'];
    $nasc_User= $userDao['nascUser'];
    $email_User = $userDao['emailUser'];
    $password_User = $userDao['senhaUser'];
    $imagem_User = $userDao['imagemUser'];
    }else{
      $nome_User = '';
      $sobrenome_User = '';
      $cpf_User = '';
      $nasc_User= '';
      $email_User = '';
      $password_User = '';
      $imagem_User = '';
      $id_User = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cadastro</title>
    <style>
        #backgroundCadastro {
            background: url('../imgs/fundo_user/fundoProdutos.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: Helvetica, Arial, sans-serif;
            overflow-x: hidden;

        }
    </style>
</head>

<body id="backgroundCadastro">
    <!-- Navbar -->
    <?php 
        require_once ('../componentes/header-user.php')
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 pb-5" >
                <div class="pt-4">
                    <h4 class="text-dark"><strong>Conheça ja a nossa loja</strong></h4>
                    <img src="../imgs/Logo.png" class="d-block img-fluid w-100" style="border-radius: 10px;" alt="...">
                </div>
            </div>
            <div class="col-md-7 pt-3 " >
                <form class="p-3 border rounded-3 form-group " action="telaCadastro.php" method="POST">
                    <div class="row">
                        <div class="form-floating col mb-2">
                            <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="Nome" required>
                            <label for="floatingInput" class="labelInput">Nome</label>
                        </div>
                        <div class="form-floating col mb-2">
                            <input type="text" name="sobrenome" class="form-control" id="floatingInput" placeholder="Sobrenome" required>
                            <label for="floatingInput" class="labelInput">Sobrenome</label>
                        </div>
                    </div>
                    <div class="form-floating mb-2 ">
                        <input type="text" name="cpf" class="form-control" id="floatingInput" placeholder="cpf aqui" required>
                        <label for="floatingInput" class="labelInput">CPF</label>
                    </div>
                    <div class="row form-floating my-2">
                        <div class="col-md-3">
                            <p class="my-1">Data de nasc:</p>
                        </div>
                        <div class="col-md-9">
                            <input type="date" class="form-control" id="floatingInput" name="nasc" required>
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="email" class="form-control" id="floatingInput" placeholder="seu_email@gmail.com" required>
                        <label for="floatingEmail" class="labelInput">Email</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="senha" required>
                        <label for="floatingPassword" class="labelInput">Senha</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit" name="submit" value="Enviar" id="submit">Cadastrar-se</button>
                    <hr class="my-4">
                    <small class="text-body-secondary">Ao clicar em "Cadastrar-se", você concorda com os nossos termos de contrato</small>
                </form>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>