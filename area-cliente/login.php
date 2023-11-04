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
<body>

    <div class="container">
        <form class="form-container" action="post">

            <div class="form-group">
                <label for="email" class="pb-1">Email:</label>
                <input type="email" id="email" value="email">
            </div>

            <div class="form-group">
                <label for="senha" class="pb-1">Senha:</label>
                <input type="password" id="senha" value="senha">
            </div>
            <input class="buttonEnviar" type="submit">
        </form>
    </div>


    <?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    print_r($_POST)
    
    
    
    ?>
</body>
</html>