<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Adm</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh;  " class="bg-dark">
  <div class="container col-xl-10 col-xxl-8 " style="height: 95vh; padding:8% 30px; background-color:'#ccc'">
    <div class="row align-items-center g-lg-5 py-4">
      <div class="col-lg-6 text-center text-lg-start pt-5">
        <img src="./../imgs/Logo.png" class="rounded-circle mx-auto d-block" alt="..." style="width:60%">
        <h1 class="display-4 fw-bold lh-1  mb-3 text-center text-white">FilmeOn</h1>
      </div>
      <div class="col-md-12 mx-auto col-lg-5 pt-5">
        <form class="p-5 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="home.php">
          <div class="form-floating mb-3">
            <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating ">
            <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
            <div class="invalid-feedback">
                Senha Inválido
            </div>
          <div class="checkbox mt-3 mb-2">
            <label>
              <input type="checkbox" value="remember-me"> Lembre de mim
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>