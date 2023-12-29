<style>
  .footer {
    background-color: black;
    height: 15vh;
    font-size: 12px;
    font-weight: 500;
    position: relative;
    bottom: 0;
  }

  .footer a {
    text-decoration: none;
    color: white;
  }

  .footer a:hover {
    color: #b9b9b9;
  }

  #footerEspacamento {
    display: flex;
    justify-content: space-between;
  }


/* daqui pra baixo é footer */
.site-footer
{
  margin-top: 50%;
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
@media (max-width: 400px){
   .footer{
    display: none;
   }
}
</style>

<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Sobre</h6>
            <p class="text-justify">Somos um grupo de entusiastas da cultura geek, apaixonados por filmes, séries, quadrinhos e jogos. 
              Percebemos a falta de um lugar que oferecesse uma variedade de produtos incríveis para os fãs dessa cultura, então 
              decidimos criar nossa loja online. Desde então, nos dedicamos a selecionar cuidadosamente os melhores produtos e trazê-los até você.
            </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Conheça já nosso site</h6>
            <ul class="footer-links"> 
              <li><a href="home.php">Home</a></li>
              <li><a href="produtos.php">Produtos</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="registro.php">Cadastrar-se</a></li>                          
              <li><a href="https://media.licdn.com/dms/image/C4D03AQFup5q7p3CQjg/profile-displayphoto-shrink_400_400/0/1550774383481?e=2147483647&v=beta&t=D9vr5gFgUHQFNVbfCOwdlBWeTJDf5VPMtKGCqre05GE">NOSSO MESTRE</a></li>              
              <li><a href="../area-admin/login.php">area-admin</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Desenvolvedores</h6>
            <ul class="footer-links">
              <li> <img src="../imgs/funcionariosLoja/matheusMerlim.jpeg" class="rounded-circle w-25" alt="..."> <a> Matheus Merlim </a> </li>
              <li> <img src="../imgs/funcionariosLoja/kauanBarbosa.jpg" class="rounded-circle w-25" alt="..."> <a> Kauan Barbosa </a> </li>                            
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 todos os direitos reservados por <a href="home.php">NerdHeaven</a></p>
          </div>          
        </div>
      </div>
</footer>




<!-- <footer class="container-fluid footer w-100">
  <div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="">
        <div class="">
          <h5 class="">Special title treatment</h5>
          <p class="">With supporting text below as a natural lead-in to additional content.</p>          
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>


</footer> -->

<!-- <div class="d-flex justify-content-center align-items-center">
    

    <a href="#" target="blank" class="my-4 mx-3">NerdHeaven © desde os primordios</a>
    <a href="#" target="blank" class="my-4 px-3">Instagram</a>
    <a href="#" target="blank" class="my-4 px-3">YouTube</a>
    <a href="#" target="blank" class="my-4 px-3">Twitter</a>
    <a href="../area-admin/login.php" target="blank" class="my-4 mx-3">admin</a>
  
  
  
  </div> -->