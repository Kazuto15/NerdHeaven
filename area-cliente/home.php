

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  <title>Home</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/geral.css">
</head>
<body id="background">
<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    // Se não estiver autenticado, incluir a navbar para usuários não logados
    include '../componentes/header-user.php';
} else {
    // Se estiver autenticado, incluir a navbar para usuários logados
    include '../componentes/header-user-logado.php';
}

// O restante do código da página home aqui
?>
    <div class="prop">
        <h3 class="justify-content-center text-white">Os melhores produtos Geek</h3>

        <button>
            <a href="../area-cliente/produtos.php">Produtos</a>
        </button>
    </div>
    
  
</body>
</html>