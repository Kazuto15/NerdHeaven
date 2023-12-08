<?php
require_once ('../dao/ProdutoDao.php');
$idProduto = $_GET['idProduto'];
$produtos = ProdutoDao::selectAllById($idProduto);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/geral.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once ('../componentes/header-user.php')
    ?>

        <div class="container-pag row align-items-center">
            <div class="col-md-6">
                <img src="../imgs/product/<?=$produtos['imagemProduto']!="" ? $produtos['imagemProduto'] : 'padrao.png';?>" 
                alt="" class="image-pag align-self-center rounded">
            </div>

            <div class="content-pag col-md-6">
                <h5><?=$produtos['nomeProduto']?></h5>
                <h4>R$<?=$produtos['precoProduto']?></h4>
                <a class="btn btn-dark" href="">Comprar</a>
                <hr>
                <div>
                    <h5>Categoria:</h5>
                    <p><?=$produtos['nomeCategoria']?></p>
                    <h5>Descrição</h5>
                    <p class="descText"><?=$produtos['descProduto']?></p>
                </div>
            </div>
        </div>
</body>
</html>