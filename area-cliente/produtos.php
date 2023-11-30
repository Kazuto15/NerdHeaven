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
                    <img id="preview" src="../imgs/product/<?php echo $produto['imagemProduto']?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >                 </div>
                <div class="product-info">
                    <h3><?= $produto['nomeProduto'] ?></h3>
                    <p>R$ <?= $produto['precoProduto'] ?></p>
                </div>
            </div>
        <?php }?>
        




        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/tt1U3lSJqFK2AA4VVaKuOZlNl+CaXz2aXFr8=" crossorigin="anonymous"></script>

</body>
</html>