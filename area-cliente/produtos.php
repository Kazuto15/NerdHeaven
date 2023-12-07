<?php 
  require_once '../dao/ProdutoDao.php'; 
  $produtos = ProdutoDao::selectAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  <title>Home</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/geral.css">
    <title>Produtos</title>
</head>
<body id="background2">
    <?php
        require_once("../componentes/header-user.php")
    ?>
    <div class="container" >
      <div class="px-lg-5">
        <div class="row py-5 justify-content-evenly ">
          <!-- Gallery item -->
          <?php foreach($produtos as $produto) { ?>
            <div class="col-xxl-3 col-lg-3 col-md-6 mb-4 mt-3" style="width: 300px">
            <div class="bg-white rounded shadow card " style="height: 100% ">
              <img src="../imgs/product/<?=$produto[5]!="" ? $produto[5] : 'padrao.png';?>" alt="" class="img-fluid card-img-top" style="width: 100%; height: 350px;  object-fit: cover;">
              <div class=" text-center justify-content-center d-flex align-items-center h-75 p-1 row" >
                <h5 class="card-title col-12"><?=$produto[1]?></h5>
                <h6 class="card-title col-12">R$ <?=$produto[3]?></h6>
              </div>
              <div class="  text-center  justify-content-center d-flex align-items-center pb-3" >
              <a class="btn btn-outline-secondary" href="vizualizar_produto.php?idProduto=<?=$produto[0]?>" role="button">Saiba Mais</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>