
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/geral.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light nav_cor" id="nav-maximized">
  <div class="container">
    <a class="navbar-brand no-link" href="home.php">
        <li class="nav-item home">
          <a class="nav-link text-white" aria-current="page" href="home.php">Home</a>
        </li>
        <img src="../imgs/header_user/Logo.png" id="logo" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
       
        <li class="nav-item produto">
          <a class="nav-link text-white" href="produtos.php">Produtos</a>
        </li>
        <li class="nav-item contato">
          <a class="nav-link text-white" href="contatos.php">Contato</a>
        </li>
        <li class="nav-item sobre">
          <a class="nav-link text-white" href="sobre.php">Sobre nós</a>
        </li>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="nav-item btn"id="login" type="button"><a href="./login.php">Login</a></button>
          <button class="nav-item btn" id="registra" type="button"><a href="./registro.php">Registrar-se</a></button>
        </div>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar bg-body-tertiary fixed-top" id="nav-minimized">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </ul>
      </div>
    </div>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Função para alternar entre as barras de navegação com base na largura da tela
    function toggleNavbar() {
        if (window.innerWidth <= 768) {
            document.getElementById('nav-maximized').style.display = 'none';
            document.getElementById('nav-minimized').style.display = 'block';
        } else {
            document.getElementById('nav-maximized').style.display = 'block';
            document.getElementById('nav-minimized').style.display = 'none';
        }
    }

    // Chame a função no carregamento da página e quando a janela for redimensionada
    window.onload = toggleNavbar;
    window.onresize = toggleNavbar;
</script>