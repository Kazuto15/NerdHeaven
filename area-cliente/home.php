<?php 
  require_once '../dao/ProdutoDao.php'; 
  $produtos = ProdutoDao::selectAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/geral.css">
    <style>
        .container-slide {
          position: absolute;
          top: 30%;
          left: 35%;
          padding: 10px;
          background-color:#a9e5ed;
          border-radius: 10px;
}

        .slider {
            margin: auto;
            max-width: 549px;
        }

        .slider section { margin-bottom: 20px; }
        .slider img.img-carousel {
          width: 100%;
          height: auto; 
          object-fit: cover;
          padding-left: 10px;
          padding-right: 10px;
          border-radius: 10%;
        }

        .slider h6, .slider p {
          text-align: center;
          margin: 0; }


        .voltar, .avancar{
            position: absolute;
            bottom: 20%;
            background-color: rgba(245, 245, 245, 0);
            color: rgb(9, 60, 214);
            text-decoration: none;
            z-index: 100;
            height: 80%;
        }
        .voltar{ left: 1%; }
        .avancar{right: 1%;}
    </style>
</head>
<body id="background">
    <?php
     require_once ("../componentes/header-user.php");
    ?>
    <div class="container-slide">
      <div class="slider">
          <?php foreach($produtos as $produto) {  ?>
            <?php if ($produto['idCategoria'] == 2) { ?>
              <div>
                <img class="img-carousel" src="../imgs/product/<?=$produto[5]?>" alt="">
                <h6><?=$produto['nomeProduto']?></h2>
                <p>R$ <?=$produto['precoProduto']?></p>
                <div class="  text-center  justify-content-center d-flex align-items-center pb-3" >
                  <a class="btn btn-dark" href="vizualizar_produto.php?idProduto=<?=$produto[0]?>" role="button">Saiba Mais</a>
                </div>
              </div>
              
            <?php } ?>
          <?php } ?>  
      </div>

    </div>
    
     <?php
        require_once ('../componentes/footer-cliente.php')
     ?>

     <!-- Conteudo do curso de JS -->

    <!-- Importação da biblioteca JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
    <!-- Importação do JS do plugin Slick -->
    <script type="text/javascript" src="../slick/slick.min.js"></script>
	  <script src="../js/plugin-slick.js"></script>
</body>
</html>