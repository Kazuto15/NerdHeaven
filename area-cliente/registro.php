<?php
    if(isset($_POST['submit']))
    {
        // print_r($_POST);
    
        include_once('config.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $nasc = $_POST['nasc'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,sobrenome,cpf,Nasc,email,senha) 
        VALUES ('$nome','$sobrenome','$cpf','$nasc','$email','$senha')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/geral.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="telaCadastro.php" method="POST">
            <fieldset>
                <legend><b>Formulario de clientes</b></legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" required>
                    <label for="sobrenome" class="labelInput">Sobrenome</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="cpf" id="date" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF:</label>
                </div>

                <div class="inputBox">
                    <label for=""><b>Data de nascimento</b></label>
                    <input type="date" name="nasc" id="nasc"  required>
                </div>

                

                
                <input type="submit" name="submit" value="Enviar" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>