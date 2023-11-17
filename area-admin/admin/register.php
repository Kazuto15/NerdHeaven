<?php 
  require_once '../../dao/AdminDao.php';
  
  if(!empty($_POST)){
    $id_Admin = $adminDao['idAdmin'];
    $nome_Admin =  $adminDao['nomeAdmin'];
    $sobrenome_Admin = $adminDao['sobrenomeAdmin'];
    $cpf_Admin = $adminDao['cpfAdmin'];
    $nasc_Admin= $adminDao['nascAdmin'];
    $email_Admin = $adminDao['emailAdmin'];
    $password_Admin = $adminDao['senhaAdmin'];
    $imagem_Admin = $adminDao['imagemAdmin'];
    }else{
      $nome_Admin = '';
      $sobrenome_Admin = '';
      $cpf_Admin = '';
      $nasc_Admin= '';
      $email_Admin = '';
      $password_Admin = '';
      $imagem_Admin = '';
      $id_Admin = '';
    }


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nerdheaven - Adm</title>
  <link rel="short icon" href="./../../img/logo/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../componentes/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
            <strong>INFORMAÇÕES DO ADMIN</strong>
            <input type="hidden" name="idAdmin" id="idAdmin" placeholder="id" value="<?=$id_Admin?>">
            <input type="hidden" name="nomeFoto" id="nomeFoto" placeholder="nomeFoto" value="<?=$imagem_Admin?>">
            <input type="hidden" value="<?=$id_Admin?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2   text-center">
                <div class="bg-white rounded">
                  <img id="preview" src="../../img/admin/<?=$imagem_Admin!="" ? $imagem_Admin : 'padrao.png';?>" alt="..." class="rounded  w-100">
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="nome" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" maxlength="30" id="nome" value="<?=$nome_Admin?>" required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="sobrenome" class="col-form-label">Sobrenome:</label>
                    <input type="text" class="form-control" name="sobrenome" maxlength="70" id="sobrenome" value="<?=$sobrenome_Admin?>" required>
                    <div class="invalid-feedback">
                      Sobrenome Inválido
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cpf" class="col-form-label">CPF:</label>
                    <input type="text" data-mask="000.000.000-00"  data-mask-selectonfocus="true" class="form-control" name="cpf" maxlength="14" id="cpf" value="<?=$cpf_Admin?> " required>
                    <div class="invalid-feedback">
                      CPF Inválido
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="nasc" class="col-form-label">Data de Nascimento:</label>
                    <input type="date" class="form-control" name="nasc" id="nasc" value="<?=$nasc_Admin?>" required>
                    <div class="invalid-feedback">
                      Data Inválido
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="email" maxlength="100" id="email" value="<?=$email_Admin?>" required>
                    <div class="invalid-feedback">
                      E-mail Inválido
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="senha" class="col-form-label">Senha:</label>
                    <input type="password" class="form-control" name="senha" maxlength="20" id="senha" value="<?=$password_Admin?>" required>
                    <div class="invalid-feedback">
                      Senha Inválido
                    </div>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-3">
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                  </div>
                </div>
                <div class=" text-end p-3">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>

</body>

</html>