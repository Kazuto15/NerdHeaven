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
    <div class="container-cards">
      <!--   <div class="product-card">
            <div class="product-image">
            <img id="preview" src="../../imgs/product/<?=$imagem_Produto!="" ? $imagem_Produto : 'padrao.jpg';?>" alt="..."
                  class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >            </div>
            <div class="product-info">
                <h6><?=$produto[1]?></h6>
                <p><?=$produto[4]?></p>
            </div>
        </div> -->
        
</body>
</html>