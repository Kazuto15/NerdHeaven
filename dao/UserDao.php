<?php
    require_once __DIR__.'../../model/Conexao.php';
    class UserDao{
        public static function insert($user){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbUser (nomeUser, sobrenomeUser, cpfUser, nascUser, emailUser, senhaUser, tokenUser, imagemUser ) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $user->getNome());
            $stmt->bindValue(2, $user->getSobrenome());
            $stmt->bindValue(3, $user->getCpf());
            $stmt->bindValue(4, $user->getNasc());
            $stmt->bindValue(5, $user->getEmail());
            $stmt->bindValue(6, $user->getPassword());
            $stmt->bindValue(7, $user->getImagem());
            $stmt->bindValue(8, $user->getToken());
            
            try{
            $stmt->execute();
            }catch (PDOException $e){
                echo 'erro na inseção do usaário: '. $e->getMessage();
            }
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbUser";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbUser WHERE idUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbUser WHERE idUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $user ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbUser SET 
            nomeUser = ?, 
            sobrenomeUser = ?, 
            cpfUser  = ?,
            nascUser = ?, 
            emailUser = ?, 
            senhaUser = ?, 
            imagemUser = ?, 
            tokenUser = ? 
            WHERE idUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $user->getNome());
            $stmt->bindValue(2, $user->getSobrenome());
            $stmt->bindValue(3, $user->getCpf());
            $stmt->bindValue(4, $user->getNasc());
            $stmt->bindValue(5, $user->getEmail());
            $stmt->bindValue(6, $user->getPassword());
            $stmt->bindValue(7, $user->getImagem());
            $stmt->bindValue(8, $user->getToken());
            $stmt->bindValue(9, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbUser WHERE emailUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($usuario && password_verify($senha, $usuario['senhaUser'])) {
                return $usuario;
            } else {
                return false;
            }
        }

    }
?>