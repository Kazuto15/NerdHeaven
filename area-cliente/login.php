<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  <title>Home</title>
    <link rel="stylesheet" href="../css/login.css">
    <!-- <meta http-equiv="refresh" content="2"> --> 
    <title>Login</title>
</head>
<body id="backgroundLoginCliente" style="justify-content: center; align-items: center; height: 100vh" class="py-4">
  <div class="container col-xl-10 col-xxl-8 " style="height: 95vh; padding:8% 30px; background-color:'#ccc'">
    <div class="row align-items-center g-lg-5 py-4  ">
      <div class="col-md-10 mx-auto">
        <form class="p-4 p-md-5 border rounded-3" method="post" action="home.php">
          <h3 class="text-center mb-3">Login</h3>
          <div class="form-floating mb-3">
            <input type="text" name="email" class="form-control" id="Input" placeholder="seu_email@gmail.com">
            <label for="Input">Email</label>
          </div>
          <div class="form-floating ">
          <input type="password" name="senha" class="form-control" id="Password" placeholder="sua senha">
            <label for="password">Senha</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Entrar</button>
          <hr class="my-4">
          <small class="text-body-secondary">Ao clicar em Entrar, você concorda com os nossos termos de uso.</small>
          <p>Não tem uma conta?<a href="registro.php"> Cadastre-se</a></p>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <?php
    if(isset($_POST["email"]) || isset($_POST['senha'])){
      $email = $_POST["email"];
      $senha = $_POST["senha"];
      print_r($_POST);
    }
  ?> 
</body>
</html>

    