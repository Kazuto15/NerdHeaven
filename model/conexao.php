<?php
    class conexao
    {
            public static function conectar()
            {
            //informações do banco de dados
             $servidor="localhost";
            $banco="bdNerdHeaven";
            $usuario="root";
            $senha="";

            // $conexao = new PDD("TIPO_BANCO:host=SERVIDOR;dbname=NOME_BANCO", "USUARIO", "SENHA");
            $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

            //se acontecer alguma coisa de errado no banco conseguimos se resolvemos o erro
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            
            return $conexao;
            }
    }
?>