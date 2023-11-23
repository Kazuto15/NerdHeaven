<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  <title>Home</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/geral.css">
    <title>Document</title>
</head>
<body style: style="justify-content: center; align-items: center; height: 100vh " id="background">
    <?php
        require_once ('../componentes/header-user.php')
    ?>

<div class="container">
        <div class="row">
            <div class="col-sm-6 d-flex pt-5 px-4 align-items-center ">                
                <img src="https://assecont.com.br/wp-content/uploads/2021/01/retorno-tel.png" class="w-100 p-5" alt="contatos page image">
            </div>

            <div class="col-md-6 pt-2 px-5 align-items-center">
                <div class="d-flex justify-content-center align-items-center" style="padding-top: 80px;">
                <div class="card w-100 h-75 " style=" margin: 0 auto">
            <div class="card-header text-center ">
                <h1 class="display-5">Feedback</h1>
            </div>
            <div class="card-body">
                <form method="post" action="./contato.php">
                <div class="mb-3 col-md-12">
                    <label for="recipient-name" class="col-form-label">Nome Completo:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                    <label class="col-form-label">E-mail:</label>
                    <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="col-form-label">Feedback</label>
                    <textarea type="text" class="form-control" id="comentario" name="comentario"></textarea>
                </div>
                <div class=" col mt-5 text-end">
                    <button type="submit" class="btn btn-primary ms-3">Enviar</button>
                </div>
                </form>
            </div>
            </div>
        </div>
            </div>
        </div>
    </div>
    

</body>
</html>