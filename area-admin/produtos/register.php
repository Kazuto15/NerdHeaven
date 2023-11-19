<?php 
require_once("../../model/Produtos.php");
require_once ('../../dao/ProdutoDao.php');
if(!empty($_POST)){
  $idAdmin = $produtoDao['idProduto'];
  $nome =  $produtoDao['nomeProduto'];
  $qntd = $produtoDao['qntdProduto'];
  $preco = $produtoDao['precoProduto'];
  $tipoProduto= $produtoDao['tipoProduto'];
  $descricao = $produtoDao['descricapProduto'];
  $imagem_Produto = $produtoDao['imagemProduto'];
  }else{
    $nome = '';
    $qntd = '';
    $preco= '';
    $tipoProduto = '';
    $descricao= '';
    $imagem_Produto = '';
    $idProduto = '';
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
            <strong>INFORMAÇÕES DO PRODUTO</strong>
            <input type="hidden" name="idProduto" id="idProduto" placeholder="id" value="<?=$id_Produto?>">
            <input type="hidden" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$imagem_Produto?>">
            <input type="hidden" value="<?=$id_Produto?'ATUALIZAR':'SALVAR'?>" name="acao" >

          </div>
          <div class="card-body row" style="align-items: center; justify-content: center;">
            <div class="col-md-2   text-center" >
              <div class="bg-white rounded border" >
                <img id="preview" src="../../imgs/admin/<?=$imagem_Produto!="" ? $imagem_Produto : 'padrao.png';?>" alt="..."
                  class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
              </div>
            </div>
            <div class=" col-md-10">
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="nome" class="col-form-label">Nome:</label>
                  <input type="text" class="form-control" name="nome" maxlength="50" id="nome" value="<?=$nome?>"
                    required>
                  <div class="invalid-feedback">
                    Adicione o nome
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="qntd" class="col-form-label">Quantidade:</label>
                  <input type="text" class="form-control" name="qntd" id="qntd" value="<?=$qntd?>" required>
                  <div class="invalid-feedback">
                    Adicione a quantidade
                  </div>
                </div>
                
                <div class="col-md-3 mb-3">
                  <label for="preco" class="col-form-label">Preço:</label>
                  <input type="text" class="form-control" name="preco" maxlength="14" id="preco"
                    data-mask="R$00,00" data-mask-selectonfocus="true" value="<?=$preco?>" required>
                  <div class="invalid-feedback">
                    Adicione o preço
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="tipoProduto" class="col-form-label">Tipo de produto:</label>
                  <input type="text" class="form-control" name="tipoProduto" maxlength="50" id="tipoProduto"
                     value="<?=$tipoProduto?>" required>
                  <div class="invalid-feedback">
                    Adicione o tipo de produto
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="descricao" class="col-form-label">Descrição:</label>
                  <input type="text" class="form-control" name="descricao" maxlength="100" id="descricao"
                    value="<?=$descricao?>" required>
                  <div class="invalid-feedback">
                    Adicione uma descrição
                  </div>
                </div>
                
                
              </div>
              <div class="row mt-5 ">
                <div class="col-md-2">
                  <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                </div>
                <div class=" text-end  col-md-10">
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