<?php 
  require_once __DIR__.'/../dao/ProdutoDao.php'; 
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
        <?php foreach($produtos as $produto) { ?>
            <div class="product-card">
                <div class="product-image">
                    <img src="../imgs/produtos/<?$imagem_produto!= "" ? $imagem_produto : 'padrap.png';?>" alt="">
                </div>
                <div class="product-info">
                    <h3><?=$produto[1]?></h3>
                    <p><?=$produto[2]?></p>
                </div>
            </div>
        <?php }?>
            <div class="carousel-container" style="display: none;">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-item">Conteúdo do Carrossel 1</div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-item">Conteúdo do Carrossel 2</div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>




        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/tt1U3lSJqFK2AA4VVaKuOZlNl+CaXz2aXFr8=" crossorigin="anonymous"></script>

</body>
</html>