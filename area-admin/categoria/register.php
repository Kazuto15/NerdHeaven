<?php 
  require_once("../../model/Categoria.php");
  require_once '../../dao/CategoriaDao.php';
  
  if(!empty($_POST)){
    $id_Categoria = $categoriaDao['idCategoria'];
    $nome_Categoria =  $categoriaDao['nomeCategoria'];
    $desc_Categoria = $categoriaDao['descCategoria'];

    }else{
      $nome_Categoria = '';
      $desc_Categoria = '';
      $id_Categoria = '';
    }


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NerdHeaven - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
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
              <strong>INFORMAÇÕES DO USUÁRIO</strong>
              <input type="text" name="idCategoria" id="idCategoria" placeholder="id" value="<?=$id_Categoria?>">
              <input type="text" value="<?=$id_Categoria?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row" style="align-items: center; justify-content: center;">
              <div class="col-md-2   text-center" >
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="nomeCategoria" class="col-form-label">Nome da categoria:</label>
                    <input type="text" class="form-control" name="nomeCategoria" maxlength="50" id="nomeCategoria" 
                    value="<?=$nome_Categoria?>" required>
                    <div class="invalid-feedback">
                      Nome da categoria Inválido
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="descCategoria" class="col-form-label">Descrição:</label>
                    <input type="text" class="form-control" name="descCategoria" maxlength="50" id="descCategoria"
                      value="<?=$desc_Categoria?>" required>
                    <div class="invalid-feedback">
                      Descrição Inválido
                    </div>
                  </div>
          
                </div>
                <div class="row mt-5 ">
                  <div class=" text-end  col-md-12">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar">
                </div>
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
  <script type="text/javascript" src="./../../js/modal.js"></script>

</body>

</html>