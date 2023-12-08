<style>
@media (max-width:768px){
    .navbar-nav{
        display: none;
    }
}

.nav_cor{
background-color: rgba(0, 0, 0, 0.555);
}
nav {
    height: 70px;
    
    box-shadow: 2px 2px 15px black;
  }
#logo{
    position: relative;
    right:10%;
    margin-left: 2%;
    height: 10%;
    width: 10%;
    border-radius: 50%;
}
#logo {
    max-width: 30%; /* Ajuste o tamanho da logo conforme necessário */
    margin-left: 10px; /* Ajuste a margem à esquerda conforme necessário */
    margin-right: 30px; /* Ajuste a margem à direita conforme necessário */
}
.navbar-brand img {
    display: inline-block;
    vertical-align: middle;
}
.no-link {
    pointer-events: none;
    cursor: default;
  }
.nav-item{
    position: absolute;
    top: 23%;
}
.home{
    top: -2vh;
    left: 8vw;
    list-style: none;
    color: white;
}

.produto{
    left: 38vw;
}
.contato{
    left: 45vw;
}
.sobre{
    left: 52vw;
}

.mobile{
    display: none;
}

#login{
    position: absolute;
    right: 12rem;    
    cursor: pointer;
    transition: all 0.3s;
    
}
#login:hover {
    transform: scale(1.1);
  } 

#registra{
    position: absolute;
    right: 4rem;
}

#registra:hover {
    transform: scale(1.1);
}
#navbarScroll{
    display: block;
}
#menu-toggler{
    display: none;
}
.homeMobile{
    position: relative;
}
.produtoMobile{
    position: relative;
    background-color: red;
}


</style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
<nav class="navbar navabar-expand-sm navbar-light nav_cor" id="nav-maximized"> 
  <div class="container">
    <a class="navbar-brand no-link" href="home.php">
        <li class="nav-item home">
          <a class="navbar-brand nav-link text-white" href="home.php">
            <img src="../imgs/header_user/Logo.png" width="35" height="35" class="d-inline-block align-top rounded-circle" alt="">NerdHeaven
          </a>
          </li>
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
          <button type="button" class="btn btn-light nav-item btn" id="login" onclick="location.href='../area-cliente/login.php';">login</button>
          <button type="button" class="btn btn-light nav-item btn" id="registra" onclick="location.href='../area-cliente/registro.php';">registrar-se</button>
          
        </div>
      </ul>
    </div>
  </div>
</nav> 

<nav class="navbar fixed-top" id="nav-minimized">
  <div class="container-fluid">
  <a class="navbar-brand text-white" href="#">
    <img src="../imgs/header_user/Logo.png" width="30" height="30" class="d-inline-block align-top rounded-circle" alt="">
    NerdHeaven
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bordaBaixo">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">NerdHeaven</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body text-white">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item homeMobile">
            <a class="nav-link active text-white" aria-current="page" href="../area-cliente/home.php">Home</a>
          </li>
          <li class="nav-item homeMobile">
            <a class="nav-link active text-white" aria-current="page" href="../area-cliente/produtos.php">Produtos</a>
          </li>
          <li class="nav-item homeMobile">
            <a class="nav-link active text-white" aria-current="page" href="../area-cliente/contatos.php">Contato</a>
          </li>
          <li class="nav-item homeMobile">
            <a class="nav-link active text-white" aria-current="page" href="../area-cliente/sobre.php">Sobre nos</a>
          </li>
        <!--   <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
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

<!-- 
<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->